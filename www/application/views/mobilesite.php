<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="default-src * data:; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
    <script src="../components/loader.js"></script>
    <script src="../lib/angular/angular.min.js"></script>
    <script src="../lib/onsenui/js/onsenui.min.js"></script>
    <script src="../lib/onsenui/js/angular-onsenui.min.js"></script>

    <link rel="stylesheet" href="../components/loader.css">
    <link rel="stylesheet" href="../lib/onsenui/css/onsenui.css">
    <link rel="stylesheet" href="../lib/onsenui/css/onsen-css-components.css">
    <link rel="stylesheet" href="../css/style.css">

    <script>
        ons.bootstrap()
          .controller('AppController', function($scope) {
            $scope.load = function(page) {
              $scope.mySplitterContent.load(page)
            }
            $scope.open = function() {
              $scope.mySplitterSide.open();
            }
          });
        ons.ready(function() {
            console.log("Onsen UI is ready!");
        });
    </script>
</head>
<body ng-controller="AppController as app">
  <ons-splitter>
    <ons-splitter-side var="mySplitterSide" side="left" width="220px" collapse swipeable>
      <ons-page>
        <ons-list>
          <ons-list-item ng-click="load('home.html')" tappable>
            Homee
          </ons-list-item>
          <ons-list-item ng-click="load('Entertainment.html')" tappable>
            Entertainment  
          </ons-list-item>
          <ons-list-item ng-click="load('about.html')" tappable>
            About
          </ons-list-item>
            <ons-list-item ng-click="load('CMHA.html')" tappable>
            Candian Mental Health Association
          </ons-list-item>
            <ons-list-item ng-click="load('Biography.html')" tappable>
            Biography Of Professor Mardon
          </ons-list-item>
            <ons-list-item ng-click="load('Knowledge.html')" tappable>
            Taking Care Of Our Mental Health
          </ons-list-item>
            <ons-list-item ng-click="load('Events.html')" tappable>
            Events
          </ons-list-item>
            <ons-list-item ng-click="load('Contributors.html')" tappable>
            Contributors
          </ons-list-item>
          
        </ons-list>
      </ons-page>
    </ons-splitter-side>
    <ons-splitter-content var="mySplitterContent" page="home.html"></ons-splitter-content>
  </ons-splitter>

  <ons-template id="home.html">
    <ons-page>
      <ons-toolbar>
        <div class="left">
          <ons-toolbar-button ng-click="open()">
            <ons-icon icon="md-menu"></ons-icon>
          </ons-toolbar-button>
        </div>
        <div class="center">
          Main
        </div>
      </ons-toolbar>
      <p style="text-align: center; opacity: 0.6; padding-top: 20px;">
        Swipe right to open the menu!
      </p>
    </ons-page>
  </ons-template>

  <ons-template id="Entertainment.html">
    <ons-page>
      <ons-toolbar>
        <div class="left">
          <ons-toolbar-button ng-click="open()">
            <ons-icon icon="md-menu"></ons-icon>
          </ons-toolbar-button>
        </div>
        <div class="center">
           Entertainment and Educational Games on Mental Health 
        </div>
      </ons-toolbar>
    </ons-page>
  </ons-template>

  <ons-template id="about.html">
    <ons-page>
      <ons-toolbar>
        <div class="left">
          <ons-toolbar-button ng-click="open()">
            <ons-icon icon="md-menu"></ons-icon>
          </ons-toolbar-button>
        </div>
        <div class="center">
          About
          <div>
               <p style="text-align: centre; padding-top: 20px;">
                 Donec sed odio dui. Cras just</br>
                odio, dapibus ac fa </br>
                Vestibulum id ligula porta  </br>
            
            </p>
            
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
          </div>
         
        </div>
      </ons-toolbar>
    </ons-page>
  </ons-template>
    <ons-template id="CMHA.html">
    <ons-page>
      <ons-toolbar>
        <div class="left">
          <ons-toolbar-button ng-click="open()">
            <ons-icon icon="md-menu"></ons-icon>
          </ons-toolbar-button>
        </div>
        <div class="center">
            <p style="text-align: centre;font-size: 14px;">Canadian Mental Health Association </p>
        </div>
      </ons-toolbar>
    </ons-page>
  </ons-template>
  
    <ons-template id="Biography.html">
    <ons-page>
      <ons-toolbar>
        <div class="left">
          <ons-toolbar-button ng-click="open()">
            <ons-icon icon="md-menu"></ons-icon>
          </ons-toolbar-button>
        </div>
        <div class="center">
           Biography Of Austin Mardon 
        </div>
      </ons-toolbar>
    </ons-page>
  </ons-template>
    <ons-template id="Knowledge.html">
    <ons-page>
      <ons-toolbar>
        <div class="left">
          <ons-toolbar-button ng-click="open()">
            <ons-icon icon="md-menu"></ons-icon>
          </ons-toolbar-button>
        </div>
        <div class="center">
           <p style="text-align: centre;font-size: 14px;"> Taking Care Of Our Mental Health </p>
        </div>
      </ons-toolbar>
    </ons-page>
  </ons-template>
   
   <ons-template id="Events.html">
    <ons-page>
      <ons-toolbar>
        <div class="left">
          <ons-toolbar-button ng-click="open()">
            <ons-icon icon="md-menu"></ons-icon>
          </ons-toolbar-button>
        </div>
        <div class="center">
           Nearby Events
        </div>
      </ons-toolbar>
    </ons-page>
  </ons-template>
  
  <ons-template id="Contributors.html">
    <ons-page>
      <ons-toolbar>
        <div class="left">
          <ons-toolbar-button ng-click="open()">
            <ons-icon icon="md-menu"></ons-icon>
          </ons-toolbar-button>
        </div>
        <div class="center">
           Contributors
        </div>
      </ons-toolbar>
    </ons-page>
  </ons-template>
</body>
</html>
