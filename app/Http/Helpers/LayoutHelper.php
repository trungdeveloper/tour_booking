<?php

function myLayoutHelperSidebarActions() {

  return [

    [ 
      "url"             =>  "countries",
      "label"           =>  "Countries",
      "mayBeDisplayed"  =>  Auth::check() && Auth::user()->hasAdminRights() 
    ],
  
    [ 
      "url"             =>  "destinations",
      "label"           =>  "Destinations",
      "mayBeDisplayed"  =>  Auth::check() && Auth::user()->hasAdminRights()
    ],
    
    [ 
      "url"             =>  "hotels",
      "label"           =>  "Hotels",
      "mayBeDisplayed"  =>  true
    ],
    
    [ 
      "url"             =>  "identificationTypes",
      "label"           =>  "Identification types",
      "mayBeDisplayed"  =>  Auth::check() && Auth::user()->hasAdminRights() 
    ],
  
    [ 
      "url"             =>  "services",
      "label"           =>  "Services",
      "mayBeDisplayed"  =>  Auth::check() && Auth::user()->hasAdminRights() 
    ],
  
    [ 
      "url"             =>  "titles",
      "label"           =>  "Titles",
      "mayBeDisplayed"  =>  Auth::check() && Auth::user()->hasAdminRights() 
    ],
  
    [ 
      "url"             =>  "tours",
      "label"           =>  "Tours",
      "mayBeDisplayed"  =>  true
    ],
  
    [ 
      "url"             =>  "tourImages",
      "label"           =>  "Tour images",
      "mayBeDisplayed"  =>  Auth::check() && Auth::user()->hasAdminRights()
    ],
  
    [ 
      "url"             =>  "userTypes",
      "label"           =>  "User categories",
      "mayBeDisplayed"  =>  Auth::check() && Auth::user()->hasAdminRights() 
    ],
  
    [ 
      "url"             =>  "users",
      "label"           =>  "Users",
      "mayBeDisplayed"  =>  Auth::check() && Auth::user()->hasAdminRights() 
    ],
  
    [ 
      "url"             =>  "customerMessages",
      "label"           =>  "Customer messages",
      "mayBeDisplayed"  =>  Auth::check() && Auth::user()->hasAdminRights() 
    ]
    
  ];
}