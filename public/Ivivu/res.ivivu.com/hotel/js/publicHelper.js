/* Vaanres */
/// <reference path="../typings/index.d.ts" />
var PublicHelper = /** @class */ (function () {
    function PublicHelper() {
        this.dateFormatter = "DD-MM-YYYY";
        this.minDate = "01-01-2015";
    }
    PublicHelper.prototype.randomNumber = function (min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    PublicHelper.prototype.remove_unicode = function (str) {
        str = str.toLowerCase();
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
        str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
        str = str.replace(/đ/g, "d");
        str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g, "-");
        str = str.replace(/-+-/g, "-");
        str = str.replace(/^\-+|\-+$/g, "");
        return str;
    };
    PublicHelper.prototype.isEmpty = function (str) {
        return (!str || 0 === str.length);
    };
    PublicHelper.prototype.isBlank = function (str) {
        return (!str || /^\s*$/.test(str));
    };
    PublicHelper.prototype.stripSpaces = function (str) {
        if (!this.isBlank(str)) {
            return $.trim(str.replace(/ /g, ''));
        }
        else {
            return "";
        }
    };
    PublicHelper.prototype.removeExtraSpaces = function (str) {
        str = str.replace(/^\s+|\s+$/g, "");
        return str;
    };
    return PublicHelper;
}());
var publicHelper = new PublicHelper();
