//var mysql = require('mysql');

//var connection = mysql.createConnection({
  //host: '	zpj83vpaccjer3ah.chr7pe7iynqr.eu-west-1.rds.amazonaws.com',
  //user: 'sw9tghynk7so1dmg',
  //password: 'o6yv58vnjnql183p'
//  database: 'c6oep2jszwl7byec'
//});
//var connection = mysql.createConnection('mysql://sw9tghynk7so1dmg:o6yv58vnjnql183p@zpj83vpaccjer3ah.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306/c6oep2jszwl7byec');

/*connection.connect(function(err){
  if (err){
    console.error('error connecting: ' + err.stack);
    return;
  }
  connection.query("SELECT * FROM magnet_survey", function (err, result, fields){
    if (err) throw err;
    console.log(result);
  });

});

function submitSurvey(){
  alert("TEST");

    var sqlSubmit = "INSERT INTO magnet_survey (userID, userName, userLocation, userBio, userGitHubID, userGitHubLangList, userLangList, userOS, userBrowser) VALUES (userID, userName, userLocation, userBio, userGitHubID, userGitHubLangList, userLangList, userOS, userBrowser)";

      //surveyChkJavaScript1, surveyChkJavaScript2, surveyChkJavaScript3, surveyChkJavaScript4, surveyChkJavaScript5, surveyChkJavaScript6, surveyChkJavaScript7, surveyChkJavaScript8, surveyChkJavaScript9, surveyChkFrontEnd1, surveyChkFrontEnd2, surveyChkFrontEnd3,    surveyChkFrontEnd4,    surveyChkDatabases1,    surveyChkDatabases2, surveyChkDatabases3,    surveyChkDatabases4, surveyChkDatabases5, surveyChkCSSPrePro1,    surveyChkCSSPrePro2,    surveyChkCSSPrePro3,    surveyChkTextEditor1,    surveyChkTextEditor2,    surveyChkTextEditor3,    surveyChkTextEditor4,    surveyChkTextEditor5,    surveyChkTextEditor6,    surveyChkTextEditor7,    surveyChkTextEditor8,    surveyChkTextEditor9,    surveyChkTextEditor10,    surveyChkTextEditor11,    surveyChkMarkdown1,    surveyChkMarkdown2,    surveyChkMarkdown3,   surveyChkMarkdown4, surveyChkIcons1, surveyChkIcons2, surveyChkIcons3, surveyChkIcons4, surveyChkIcons5,msurveyChkGitClients1, surveyChkGitClients2, surveyChkGitClients3,
      //surveyChkGitClients4,    surveyChkGitClients5,    surveyChkGitClients6,    surveyChkExperimenting1,    surveyChkExperimenting2,    surveyChkExperimenting3,    surveyChkExperimenting4,    surveyChkCollaboraton1,    surveyChkCollaboraton2,    surveyChkCollaboraton3,    surveyChkCollaboraton4,   surveyChkWebDevCommunities1,    surveyChkWebDevCommunities2, surveyChkWebDevCommunities3, surveyChkWebDevCommunities4,surveyChkWebDevCommunities5, surveyChkWebDevCommunities6,    surveyChkWebDevCommunities7,    surveyChkWebDevCommunities8,    surveyChkWebDevCommunities9,    surveyChkWebDevCommunities10,    surveyChkWebDevCommunities11,    surveyChkWebDevCommunities12,    surveyChkWebDevCommunities13,    surveyChkWebDevNewsletters1,    surveyChkWebDevNewsletters2,   surveyChkWebDevNewsletters3,    surveyChkWebDevNewsletters4,    surveyChkWebDevNewsletters5, surveyChkWebDevNewsletters6, surveyChkWebDevNewsletters7, surveyChkWebDevNewsletters8) VALLUES (userID, userName, userLocation, userBio,
      //userGitHubID, userGitHubLangList, userLangList, userOS, userBrowser, surveyChkJavaScript1, surveyChkJavaScript2, surveyChkJavaScript3, surveyChkJavaScript4, surveyChkJavaScript5, surveyChkJavaScript6, surveyChkJavaScript7, surveyChkJavaScript8, surveyChkJavaScript9, surveyChkFrontEnd1, surveyChkFrontEnd2, surveyChkFrontEnd3,    surveyChkFrontEnd4, surveyChkDatabases1, surveyChkDatabases2, surveyChkDatabases3,    surveyChkDatabases4, surveyChkDatabases5, surveyChkCSSPrePro1,    surveyChkCSSPrePro2,    surveyChkCSSPrePro3,    surveyChkTextEditor1,    surveyChkTextEditor2,    surveyChkTextEditor3,    surveyChkTextEditor4,    surveyChkTextEditor5,    surveyChkTextEditor6,    surveyChkTextEditor7,    surveyChkTextEditor8,    surveyChkTextEditor9,    surveyChkTextEditor10,    surveyChkTextEditor11,    surveyChkMarkdown1, surveyChkMarkdown2,    surveyChkMarkdown3,   surveyChkMarkdown4, surveyChkIcons1,    surveyChkIcons2,    surveyChkIcons3,    surveyChkIcons4,    surveyChkIcons5,
      //surveyChkGitClients1,    surveyChkGitClients2,    surveyChkGitClients3,    surveyChkGitClients4,    surveyChkGitClients5,    surveyChkGitClients6,    surveyChkExperimenting1,    surveyChkExperimenting2,    surveyChkExperimenting3,    surveyChkExperimenting4,    surveyChkCollaboraton1,    surveyChkCollaboraton2,    surveyChkCollaboraton3,    surveyChkCollaboraton4,   surveyChkWebDevCommunities1,    surveyChkWebDevCommunities2,    surveyChkWebDevCommunities3,    surveyChkWebDevCommunities4,    surveyChkWebDevCommunities5,    surveyChkWebDevCommunities6,    surveyChkWebDevCommunities7,    surveyChkWebDevCommunities8,    surveyChkWebDevCommunities9,    surveyChkWebDevCommunities10,    surveyChkWebDevCommunities11,    surveyChkWebDevCommunities12,    surveyChkWebDevCommunities13,    surveyChkWebDevNewsletters1,    surveyChkWebDevNewsletters2,   surveyChkWebDevNewsletters3,    surveyChkWebDevNewsletters4,    surveyChkWebDevNewsletters5,    surveyChkWebDevNewsletters6,    surveyChkWeb
      //DevNewsletters7,    surveyChkWebDevNewsletters8 ) ";

      connection.connect(function(err){
        if (err){
          console.error('error connecting: ' + err.stack);
          return;
        }
        connection.query(sqlSubmit, function (err, result) {
          if (err) throw err;
          console.log("1 record inserted");
          alert("SQL inserted");
        });

      });


    location.reload();

}
