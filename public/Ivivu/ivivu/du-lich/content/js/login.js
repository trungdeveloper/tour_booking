//var rootpay = "http://localhost:8084/";
//var rootpartner = "http://localhost:8083";
var rootpay = "https://pay.ivivu.com/";
var rootpartner = "https://partners.ivivu.com";
/*Login function*/
; (function ($) {
    $.fn.onTextEnter = function (options) {
        var defaults = {
            btnToTrigger: null
        };
        var opts = $.extend(defaults, options);
        return this.each(function () {
            var self = $(this);
            self.bind('keypress', function (evt) {
                if (evt.which && evt.which == 13) {
                    if (opts.btnToTrigger != null) opts.btnToTrigger.trigger('click');
                    return false;
                }
                else return true;
            });
        });
    }
})(jQuery);
var Common = function () {
    var handleInit = function () {
        //Khởi tạo tooltip
        $('[data-toggle="tooltip"]').tooltip();

        //Khởi tạo modal, toàn trang chỉ sử dụng duy nhất 1 modal
        $("#ivivuModal").modal({ show: false }).on('hidden.bs.modal', function (e) {
            $(this).find('.modal-header, .modal-body, .modal-footer').html('');
            $(this).find('.modal-dialog').attr('class', 'modal-dialog');
            $(this).find('.modal-header').attr('class', 'modal-header');
            $(this).find('.modal-body').attr('class', 'modal-body');
            $(this).find('.modal-footer').attr('class', 'modal-footer');
            $(this).find('.modal-header, .modal-footer').addClass('hide');
            if (Payrequest != undefined)
                Payrequest.destroy();
            if ($('#modalmap').length > 0 && $('#modalmap').gmap3('get'))
                $('#modalmap').gmap3('destroy');
        });
    };

    var _getusername = function (data) {
        if (data != 0) {
            $.post(rootpay + "lay-user-name", { database: data }, function () {
            }).success(function (datacheck) {
                $("#show_user_name").css("padding-top", "15px");
                $("#show_user_name").css("padding-bottom", "10px");

                $("#show_user_name").html('<a class="dropdown-toggle menu-more" data-toggle="dropdown" href="javascript:;">' + datacheck.username + '</a>');
                if (datacheck.logintyp == 2) {
                    $("#show_user_name a").after('<ul class="dropdown-menu bullet"><li><a href="' + rootpartner + '?key=' + datacheck.fulllogin + '">My booking</a></li><li id="showbuttonloign"><a href="javascript:void(0)" onclick="Common.logout()" id="searchlogout">Logout</a></li></ul>');
                }
                else {
                    $("#show_user_name a").after('<ul class="dropdown-menu bullet"><li id="showbuttonloign"><a href="javascript:void(0)" onclick="Common.logout()" id="searchlogout">Logout</a></li></ul>');
                }  
                $("#UserLogin").addClass('hidden');
                $("#UserMenu").removeClass('hidden');
                $("#UserName").html((datacheck.username.length > 10 ? (datacheck.username.substring(0, 10) + '...') : datacheck.username) + ' <i class="fa fa-angle-down"></i>');
                $("#Name").html((datacheck.username.length > 10 ? (datacheck.username.substring(0, 10) + '...') : datacheck.username));
                //if (datacheck.avatar != "") {
                //    $("#avatarDesk").attr("src", datacheck.avatar);
                //    $("#avatarMobi").attr("src", datacheck.avatar);
                //} else {
                //    $("#avatarDesk").attr("src", "Content/img/avatars/avatar-default-white.svg");
                //    $("#avatarMobi").attr("src", "Content/img/avatars/avatar-default-white.svg");
                //}
                if (datacheck.logintyp == 2) {
                    $(".afterLogin").after('<li><a id="myBooking" href="' + rootpartner + '?key=' + datacheck.fulllogin + ' ">My booking</a></li> <li><a href="javascript:void(0)" onclick="Common.logout()" id="searchlogout">Đăng xuất</a></li>');
                }
                else {
                    $(".afterLogin").after('<li><a href="javascript:void(0)" onclick="Common.logout()" id="searchlogout">Đăng xuất</a></li>');
                } 
            });
        }
    };

    var _openlogin = function () {

        //$('#myModalloginivivu').modal({
        //    show: 'true',
        //    keyboard: true
        //});
        $('#login-modal').modal({
            show: 'true',
            keyboard: true
        });
        $('.modal-backdrop').hide();
    };
    var _enterlogin = function () {
        $("#show_loading").show();
        var _username = $("#namelogin").val();
        var _password = $("#password").val();
        var _k = 0;
        if (_username == "") {
            _showerror("Vui lòng nhập tên đăng nhập !", "namelogin");
            $("#show_loading").hide();
            _k = 1;

        }
        if (_password == "") {
            _showerror("Vui lòng nhập mật khẩu !", "password");
            $("#show_loading").hide();
            _k = 1;
        }
        if (_k != 0) {
            return;
        }
        else {
            $("#show_loading").hide();
            $.ajax({
                url: rootpay + "/kiem-tra-dang-nhap",
                type: 'GET',
                data: { username: _username, password: _password },
                crossDomain: true,
                dataType: 'jsonp',
                jsonp: false
            });
        }


    };
    var _checklogin = function () {
        var _pareameter = window.location.hash.substring(1);
        if (_pareameter != "") {
            if (_pareameter.length > 0) {
                if (_pareameter != "review") {
                    if (_pareameter.length > 0) {
                        $.ajax({
                            url: rootpay + "/kiem-tra-dang-nhap-a",
                            data: { key: _pareameter },
                            type: 'GET',
                            crossDomain: true,
                            dataType: 'jsonp',
                            jsonp: false
                        });
                    }
                }
            }
        }


    };

    var _login = function () {
        $("#btnlogin").click(function () {
            $("#show_loading").show();
            var _username = $("#namelogin").val();
            var _password = $("#password").val();
            var _k = 0;
            if (_username == "") {
                _showerror("Vui lòng nhập tên đăng nhập !", "namelogin");
                $("#show_loading").hide();
                _k = 1;

            }
            if (_password == "") {
                _showerror("Vui lòng nhập mật khẩu !", "password");
                $("#show_loading").hide();
                _k = 1;
            }
            if (_k != 0) {
                return;
            }
            else {
                $("#show_loading").hide();
                $.ajax({
                    url: rootpay + "/kiem-tra-dang-nhap",
                    type: 'GET',
                    data: { username: _username, password: _password },
                    crossDomain: true,
                    dataType: 'jsonp',
                    jsonp: false
                });
            }
        });
        $("#namelogin, #password").onTextEnter({ btnToTrigger: $("#btnlogin") });
    }
    var _showerror = function (_alert, _id) {

        if (!$("#" + _id + "_a").length) {
            $("#" + _id).attr("placeholder", _alert);
            if (_id != "") {
                $("#" + _id).css({ "border": "1px solid red" });
            }
            setTimeout(function () {
                if (_id != "") {

                    $("#" + _id).css({ "border": "" });
                }
            }, 3000);
        }
    };
    var _logout = function () {
        $("#namelogin").val("");
        $("#password").val("");
        $.ajax({
            url: rootpay + "/danh-xuat",
            type: 'GET',
            crossDomain: true,
            dataType: 'jsonp',
            jsonp: false
        });
        setTimeout(function () {
            $("#show_user_name").removeAttr("style");
            HandleLoginType(-1);
        }, 280);
        $("#UserLogin").removeClass('hidden');
        $("#UserMenu").addClass('hidden');
        $('#searchlogout').parent().remove();
        $('#myBooking').parent().remove();
    };
    var _laydangnhap = function () {
        $.ajax({
            url: rootpay + "/lay-dang-nhap",
            type: 'GET',
            crossDomain: true,
            dataType: 'jsonp',
            jsonp: false
        });
    }
    var _onpddd = function () {
        $("#show_loading").show();
        var _username = $("#namelogin").val();
        var _password = $("#password").val();
        var _k = 0;
        if (_username == "") {
            _showerror("Vui lòng nhập tên đăng nhập !", "namelogin");
            $("#show_loading").hide();
            _k = 1;

        }
        if (_password == "") {
            _showerror("Vui lòng nhập mật khẩu !", "password");
            $("#show_loading").hide();
            _k = 1;
        }
        if (_k != 0) {
            return;
        }
        else {
            $("#show_loading").hide();
            $.ajax({
                url: rootpay + "/kiem-tra-dang-nhap",
                type: 'GET',
                data: { username: _username, password: _password },
                crossDomain: true,
                dataType: 'jsonp',
                jsonp: false
            });
        }
    }; 

    return {
        init: function () {
           // console.log('Welcome to iVIVU.com');
            handleInit();
            //_openlogin();
            _login();
            //_logout();
            _checklogin();
        },
        logout: function () {
            _logout();
        },
        login: function () {
            _openlogin();
        },
        laydangnhap: function () {
            _laydangnhap();
        },
        enterlogin: function () {
            _onpddd();
        },
        getusername: function (data) {
            _getusername(data);
        },
    };
}();

$(function () {
    Common.init();
});
function HandleLoginType(type)
{
    //for ctv login
    if (type == 2) {
        $(".ctv-action").show();
        $(".custom-action").hide();
    }
    else {
        $(".ctv-action").hide();
        $(".custom-action").show();
    }
    //end for ctv login
}

var ldnCallback = function (data) {

    if (data != 0) {
        $("#hdhdhdhhdhdhdhdhdhd").val(data);
        if (window.location.hash) {
            var hash = window.location.hash.substring(1);
            if (hash != "review") {
                window.location.hash = '';
            }
        }
    } else {
        $("#hdhdhdhhdhdhdhdhdhd").val('');
        $("#show_user_name").html('<a href="javascript:void(0)" onclick="Common.login()" data-keyboard="true" id="searchlogingg">Login</a>');
    }
    Common.getusername(data);
    if (typeof App != 'undefined') {
        if (typeof App.getPrice == 'function') {
            App.getPrice(data);
        }
    }
};
var ktdnCallback = function (data) {
    if (data != 0) {
        //$("#myModalloginivivu").modal('hide');
        $("#login-modal").modal('hide');
        $("#hdhdhdhhdhdhdhdhdhd").val(data);
        Common.getusername(data);
        if (typeof App != 'undefined') {
            if (typeof App.getPrice == 'function') {
                App.getPrice(data);
            }
        }
        $("#show_error_login").css('display', "none");
    }
    else {

        $("#hdhdhdhhdhdhdhdhdhd").val('');
        $("#show_error_login").html('Tên đăng nhập hoặc mật khẫu không đúng !');
        $("#show_error_login").css('display', "block");
    }
}

$(function () {
    $.ajax({
        url: rootpay + "/lay-dang-nhap",
        type: 'GET',
        crossDomain: true,
        dataType: 'jsonp',
        jsonp: false
    });

});

/*Hotline function*/
function initHotline() {

    var currentOffice = readCookie("HOTLINE");
    if (currentOffice != null && currentOffice != undefined) {
        bindHeaderHotline(JSON.parse(currentOffice));
        bindFooterHotline(JSON.parse(currentOffice));
    }
    else {
        $.ajax({
            url: rootpay + "get-office-code",
            type: "POST",
            dataType: "JSON",
            contentTyp: "application/json; charset=utf-8",
            async: false,
            crossDomain: true,
            success: function (data) {
                createCookie("HOTLINE", JSON.stringify(data), 1 / 24);
                bindHeaderHotline(data);
                bindFooterHotline(data);
            }
        });
    }
}
function bindHeaderHotline(obj) {

    //$(".hotline-link").attr("href", "tel:" + obj.Hotline);
    //$(".hotline-link").html('<i class="fa fa-phone"></i> ' + obj.HotlineDisplay);

    //mobile display
    $("#mobileDisplayName").html(obj.Code);
    //$("#MobileTime").html('<i class="fa fa-clock-o"></i> ' + (obj.Time != null ? obj.Time : "7h30 → 21h"));
    //desktop display
    //$("#DeskTime").html('<i class="fa fa-clock-o"></i> ' + (obj.Time != null ? obj.Time : "7h30 → 21h"));
    $("#DeskDisplayName").html(obj.locationName);
}
function bindFooterHotline(obj) {
    $(".bind-hotline-bt").attr("href", "tel:" + obj.Hotline);
    $(".bind-hotline-bt").text(obj.HotlineDisplay);
}

function createCookie(name, value, days) {
    if (days) {
        var date = new Date();

        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));

        var expires = '; expires=' + date.toGMTString();
    } else {
        expires = '';
    }

    document.cookie = name + '=' + encodeURIComponent(value) + expires + '; path=/';
}


function readCookie(name) {
    var nameEQ = name + '=';
    var ca = document.cookie.split(';');

    for (var i = 0; i < ca.length; i++) {
        var c = decodeURIComponent(ca[i]);

        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }

    return null;
}

function HeaderHotline(obj) {
    if (obj == "SG") {
        writeHotline("SG");
    } else if (obj == "HN") {
        writeHotline("HN");
    } else if (obj == "DN") {
        writeHotline("DN");
    } else {
        writeHotline("CT");
    }
}

function writeHotline(Name) {

    $.ajax({
        url: rootpay + "/ip-mapping",
        type: "POST",
        dataType: "JSON",
        contentTyp: "application/json; charset=utf-8",
        async: false,
        crossDomain: true,
        data: { locationName: Name },
        success: function (data) {
            if (data.error == undefined) {
                createCookie("HOTLINE", JSON.stringify(data), 1 / 24);
                bindHeaderHotline(data);
                bindFooterHotline(data);
            }
        },
        error: function () {

        }
    });

}
/*end Hotline function*/