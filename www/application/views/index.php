<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="default-src * data:; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
    <script src="components/loader.js"></script>
    <script src="lib/angular/angular.min.js"></script>
    <script src="lib/onsenui/js/onsenui.min.js"></script>
    <script src="lib/onsenui/js/angular-onsenui.min.js"></script>

    <link rel="stylesheet" href="components/loader.css">
    <link rel="stylesheet" href="lib/onsenui/css/onsenui.css">
    <link rel="stylesheet" href="lib/onsenui/css/onsen-css-components.css">
    <link rel="stylesheet" href="css/style.css">

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
            Home
          </ons-list-item>
          <ons-list-item ng-click="load('Entertainment.html')" tappable>
            Entertainment  
          </ons-list-item>
          <ons-list-item ng-click="load('about.html')" tappable>
            About the project
          </ons-list-item>
            <ons-list-item ng-click="load('cmha.html123')" tappable>
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
          Home
        </div>
      </ons-toolbar>
      <p style="text-align: center; opacity: 0.6; padding-top: 20px;">
        Swipe right to open the menu!
      </p>
      <p style="text-align: center; opacity: 1.5, color: rgb(255,165,0); padding-top: 50px;">
      "If you break your leg, you're still you. If your brain is broken, are you still you?" - Goldbloom, D. and Bryden, P. (2016). How can I help? A week in My Life as a Psychiatrist. Toronto, Ontario: Simon & Schuster Canada </p>
      </p>
        <table>
          <td>
            <div class="center">
              <div class="container">
            <p>
      <map name="FPMap0">
      <area href="home.html" shape="polygon" coords="71, 309, 156, 384, 178, 365, 119, 275">
      <area href="entertainment.html" shape="polygon" coords="105, 203, 231, 163, 263, 311, 195, 347">
      <area href="about.html" shape="polygon" coords="265, 95, 383, 98, 373, 309, 277, 305">
      <area href="cmha.html" shape="polygon" coords="471, 146, 537, 196, 454, 350, 383, 306">
      <area href="Biography.html" shape="polygon" coords="166, 626, 57, 686, 148, 779, 200, 663">
      <area href="FYI.html" shape="polygon" coords="232, 675, 152, 843, 255, 881, 294, 700">
     
      <area href="events.html" shape="polygon" coords="309, 716, 335, 900, 430, 887, 404, 702">
      <area href="contributors.html" shape="polygon" coords="409, 700, 472, 810, 540, 729, 469, 659">
    
      </map>
      
          <img class="img-responsive" src="images/main_interface.png" usemap="#FPMap0"></p>
          </div>
          </div>
      <p>&nbsp;
      </p>
      <p>&nbsp;
      </p>
          </td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    
    <td><p>Copyright(c) 2016. Antarctic Institute of Canada. All Rights Reserved</p>

  </tr>
</table>
  
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
      <p>Hello Ửold</p>
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
  
            
            </p>
            
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
          </div>
         
        </div>
      </ons-toolbar>
    </ons-page>
  </ons-template>
    <ons-template id="cmha.html123">
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
        <iframe src="cmha.html" width = "1000px" height = "1000px"></iframe>
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
          <div class="container">
           <p style="text-align: centre; font-size: 14px;">Biography Of Austin Mardon </p>
           
        </div>
        <iframe src="Biography.html" width = "1000px" height = "1000px"></iframe>
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
      <div class="center">
           <div class="container">
           <p class="" style="text-align: centre;  font-size: 14px"> Contributors of this project are not only Alberta students who can actually get the bursary after finishing SCiP, but also non-Alberta students, and students in Vietnam,
           Taiwan, US who have genuine and great passion for technology and mental health. These overseas contributors agree to devote their talent and time to our project regardless of not being promised financial assistances and bursaries from SCiP.
           </p>
           </div>
           <iframe src="contributors.html" height="500px" style="width:100%"></iframe>
        </div>


    </ons-page>
  </ons-template>
  
</body>
</html>


<script>
    var app = angular.module('myApp', []);
    app.controller('TransList', function($scope, $http) {
      <!-- send post request to the server -->
        $http.get("api/sampledata.php") 
        .then(function (response) {
          <!-- get the response result -->
          $scope.company = response.data;
        });

    });
</script>