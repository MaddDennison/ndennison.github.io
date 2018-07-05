var app = angular.module('app', []);

app.controller("MainCtrl", function($http){

  var vm = this;
  vm.fetchData = function(user){
    var keys = [];
    var dvGitHubData = document.getElementById("dvGitHubData");
    dvGitHubData.style.display = "block";
    var dvTopicsAccordion = document.getElementById("dvTopicsAccordion");
    dvTopicsAccordion.style.display = "none";
    vm.loading = true;
    $http.get('https://api.github.com/users/' + user.name).then(function(res){
      vm.name = res.data.name;
      userName = vm.name;
      vm.location = res.data.location;
      vm.id = res.data.id;
      userLocation = vm.location;

      userGitHubID = vm.userName;
      vm.company = res.data.company;
      vm.email = res.data.email;
      vm.bio = res.data.bio;
      userBio = vm.bio;
      vm.followers = res.data.followers;
      vm.following = res.data.following;
      vm.created_at = res.data.created_at;
      vm.updated_at = res.data.updated_at;
      vm.avatar = res.data.avatar_url;
      vm.data = res;
      vm.loading = false;
      vm.userName = user.name;
    })
    $http.get('https://api.github.com/users/' + user.name +"/repos").then(function(res){
      vm.repo_names = res.data.full_name;
      vm.repo_lang = res.data.language;
      vm.repo_data = res.data;

      var i;
      var text = "";
      for (i=0; i<res.data.length; i++){
        text += vm.repo_data[i].language + " "
      }



    var arrayOfLang = text.split(/\s+/);

    var langCount = {};
    for (var i = 0; i < arrayOfLang.length; i++){
      var langPrime = arrayOfLang[i];
      if (langPrime != "null" && langPrime != ""){
        if (langCount[langPrime] === undefined){
          langCount[langPrime] = 1;
          keys.push(langPrime)
        } else {
          langCount[langPrime] = langCount[langPrime] + 1;
        }
      }
      keys.sort(compare);

      function compare(a,b){
        var countA = langCount[a];
        var countB = langCount[b];
        return countB - countA;
      }
      vm.langprime = arrayOfLang;
      vm.langcount = langCount;
      var myJSON = JSON.stringify(langCount);
    //document.getElementById("LangListCount").innerHTML = myJSON;
  }
  var objTemp = [];
    for (var i = 0; i <keys.length; i++){
      objTemp[i] = {
        category: keys[i],
        columnValue: vm.langcount[keys[i]]
      }
    }

document.getElementById("LangList").value = vm.langprime;


    //document.getElementById("testdiv").innerHTML = JSON.stringify(objTemp);

    <!-- amCharts javascript code -->
          AmCharts.makeChart("chartdivSocial",
            {
              "type": "serial",
              "categoryField": "GitHub Social Stats",
              "startDuration": 1,
              "categoryAxis": {
                "gridPosition": "start"
              },
              "trendLines": [],
              "graphs": [
                {
                  "balloonText": "[[title]] of [[category]]:[[value]]",
                  "fillAlphas": 1,
                  "id": "AmGraph-1",
                  "title": "Followers",
                  "type": "column",
                  "valueField": "Followers"
                },
                {
                  "balloonText": "[[title]] of [[category]]:[[value]]",
                  "fillAlphas": 1,
                  "id": "AmGraph-2",
                  "title": "Following",
                  "type": "column",
                  "valueField": "Following"
                }
              ],
              "guides": [],
              "valueAxes": [
                {
                  "id": "ValueAxis-1",
                  "title": ""
                }
              ],
              "allLabels": [],
              "balloon": {},
              "legend": {
                "enabled": true,
                "useGraphSettings": true
              },
              "titles": [
                {
                  "id": "Title-1",
                  "size": 12,
                  "text": "GitHub Social Stats"
                }
              ],
              "dataProvider": [
                {
                  "GitHub Social Stats": user.name,
                  "Followers": vm.followers,
                  "Following": vm.following
                }
              ]
            }
          );

  var chart = AmCharts.makeChart("chartdivLang",
    {
      "type": "radar",

      "categoryField": "category",
      "startDuration": 2,
      "theme": "light",
      "categoryAxis": {
        "gridPosition": "start"
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": false
      },
      "trendLines": [],
      "graphs": [
        {
          "balloonText": "[[value]] projects",
          "bullet": "round",
          "id": "AmGraph-1",
          "valueField": "columnValue"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "Count of repos"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "Top languages appearing in your GitHub projects"
        }
      ],
      "dataProvider": objTemp
    }
  );
  })
  }




})
