<?php
include_once './dbh.php';
?>
<!DOCTYPE html>
<html ng-app='app'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="This short survey collects some developer focused data">
  <meta name="author" content="Nathan Dennison">
  <link rel="icon" href="./magnet.ico.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Magnet Survey</title>
  <!-- amCharts fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <!--Bootstrap CSS-->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!--<script src="js/bootstrap.min.js"></script>-->
  <!--Angular CDN-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular.min.js"></script>
  <!-- amCharts javascript sources -->
  <script type="text/javascript" src="./amcharts/amcharts.js"></script>
  <script type="text/javascript" src="./amcharts/serial.js"></script>
  <script type="text/javascript" src="./amcharts/dark.js"></script>
  <script type="text/javascript" src="./amcharts/light.js"></script>
  <script type="text/javascript" src="./amcharts/radar.js"></script>
  <script src="./amcharts/dataloader.min.js"></script>
  <!--jquery -->
  <script src="./js/jquery-3.3.1.js"></script>
  <!--Magnet Scripts -->
  <script src="./script.js"></script>
  <!--<script src="./insert.js"></script>-->
  <!--This little script changes the display settings of the GitHub username input box -->
  <script type = "text/javascript">
    function showGitHubUserInput(){
      var chkYes = document.getElementById("chkYes");
      var chkNo = document.getElementById("chkNo");
      var dvGitHubData = document.getElementById("dvGitHubData");
      var dvGitHubUserInput = document.getElementById("dvGitHubUserInput");
      var dvNoGitHubData = document.getElementById("dvNoGitHubData");
      dvGitHubUserInput.style.display = chkYes.checked ? "block": "none";
      if (chkYes.checked == true){
        dvGitHubUserInput.style.display = "block";
        dvNoGitHubData.style.display = "none";
      };
      if (chkNo.checked == true){
        dvGitHubData.style.display = "none";
        dvNoGitHubData.style.display = "block";
      };
  }

  function continueSurveyGitHubUser(){
    var LangList = document.getElementById("LangList").value;
      var dvTopicsAccordion = document.getElementById("dvTopicsAccordion");
      dvTopicsAccordion.style.display = "block";
      var dvJavaScriptLibraryCardFull = document.getElementById("dvJavaScriptLibraryCardFull");
      var LangListArray = [];
      LangListArray = LangList.split(",");
      for (var i = 0; i < LangListArray.length; i++){
        if (LangListArray[i]!=="JavaScript"){
          dvJavaScriptLibraryCardFull.style.display = "none";
        } else{dvJavaScriptLibraryCardFull.style.display = "flex";
            break;};
      };
      var dvFrontEndFrameworksFull = document.getElementById("dvFrontEndFrameworksFull");
      for (var i = 0; i < LangListArray.length; i++){
        if (LangListArray[i]!=="HTML"){
          dvFrontEndFrameworksFull.style.display = "none";
        } else {
          dvFrontEndFrameworksFull.style.display = "flex";
        break;};
      };
      var dvDatabasesFull = document.getElementById("dvDatabasesFull");
      for (var i = 0; i < LangListArray.length; i++){
        if (LangListArray[i]!=="SQL"){
          dvDatabasesFull.style.display = "none";
        } else {
          dvDatabasesFull.style.display = "flex";
        break;};
      };
      var dvCSSPreprocessorsFull = document.getElementById("dvCSSPreprocessorsFull");
      for (var i = 0; i < LangListArray.length; i++){
        if (LangListArray[i]!=="SQL"){
          dvCSSPreprocessorsFull.style.display = "none";
        } else {
          dvCSSPreprocessorsFull.style.display = "flex";
        break;};
      };
      var dvIconsFull = document.getElementById("dvIconsFull");
      for (var i = 0; i < LangListArray.length; i++){
        if (LangListArray[i]!=="SQL"){
          dvIconsFull.style.display = "none";
        } else {
          dvIconsFull.style.display = "flex";
        break;};
      };
      var dvSubmitSurvey = document.getElementById("dvSubmitSurvey");
      dvSubmitSurvey.style.display = "block";
  }
  function getSelectValues(select) {
      var result = [];
      var options = select && select.options;
      var opt;
      for (var i=0, iLen=options.length; i<iLen; i++) {
        opt = options[i];
        if (opt.selected) {
          result.push(opt.value || opt.text);
        }
      }
      return result;
    }
  function continueSurvey(){
    var LangMultiSelect = document.getElementById("langMultiSelect");
    var LangListArray = getSelectValues(LangMultiSelect);
      var dvTopicsAccordion = document.getElementById("dvTopicsAccordion");
      dvTopicsAccordion.style.display = "block";
      var dvJavaScriptLibraryCardFull = document.getElementById("dvJavaScriptLibraryCardFull");
      for (var i = 0; i < LangListArray.length; i++){
        if (LangListArray[i]!=="JavaScript"){
          dvJavaScriptLibraryCardFull.style.display = "none";
        } else{dvJavaScriptLibraryCardFull.style.display = "flex";
            break;};
      };
      var dvFrontEndFrameworksFull = document.getElementById("dvFrontEndFrameworksFull");
      for (var i = 0; i < LangListArray.length; i++){
        if (LangListArray[i]!=="HTML"){
          dvFrontEndFrameworksFull.style.display = "none";
        } else {
          dvFrontEndFrameworksFull.style.display = "flex";
        break;};
      };
      var dvDatabasesFull = document.getElementById("dvDatabasesFull");
      for (var i = 0; i < LangListArray.length; i++){
        if (LangListArray[i]!=="SQL"){
          dvDatabasesFull.style.display = "none";
        } else {
          dvDatabasesFull.style.display = "flex";
        break;};
      };
      var dvCSSPreprocessorsFull = document.getElementById("dvCSSPreprocessorsFull");
      for (var i = 0; i < LangListArray.length; i++){
        if (LangListArray[i]!=="CSS"){
          dvCSSPreprocessorsFull.style.display = "none";
        } else {
          dvCSSPreprocessorsFull.style.display = "flex";
        break;};
      };
      var dvIconsFull = document.getElementById("dvIconsFull");
      for (var i = 0; i < LangListArray.length; i++){
        if (LangListArray[i]!=="HTML"){
          dvIconsFull.style.display = "none";
        } else {
          dvIconsFull.style.display = "flex";
        break;};
      };
      var dvSubmitSurvey = document.getElementById("dvSubmitSurvey");
      dvSubmitSurvey.style.display = "block";
  }
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body ng-controller='MainCtrl as vm'>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <img src ="magnet.png" width="40" height ="40" class+"d-inline-block align-top" alt="">
        <a class="navbar-brand" href="#">&nbsp;Magnet_Test Survey</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">


        </div>
      </nav>

      <main role="main" class="container">

<br><br><br>
  <h3>Magnet_Test Developer Survey</h3>



  <p>To save you time, and help us ask the right questions we would like to access some of your public GitHub data.</p>
  <span>Are you a GitHub user?</span><br>
<form  action ="./insert.php" method="POST">
    <div class="form-group">
      <input type="radio" id="chkYes" name="chkGitHubUser" onclick="showGitHubUserInput()" />
      Yes, of course<br>
      <input type="radio" id="chkNo"name="chkGitHubUser"  onclick="showGitHubUserInput()"  />
      No, I'm not<br>
    </div>
    <div id="dvGitHubUserInput" style="display: none">

      <label for="enter">Great, would you please enter your GitHub login? &ensp; </label>
      <input input class="form-control mr-sm-2" type="text" ng-model="user.name" name="enter">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="button" ng-click="vm.fetchData(user)">Find public info</button>

      <br>
    </div>

    <div class="card" id="dvGitHubData" style="display: none">
      <div class="card-header" id="dvJavaScriptLibraryQuestions">
        <h3 class="mb-0">
        Some of your public GitHub data:
        </h3>
      </div>

      <div class="card-body">
        <h4 ng-if="vm.loading === true">Loading...</h4>
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Basic Info</h5>
                <img src={{vm.avatar}} alt="GitHub Avatar" style="border-radius:25%;padding-right:15px;float:left;width:200px;height:200px;">
                <label for="userName">Name: &ensp; </label>
                <input class="form-control mr-sm-2" type="text" value='{{vm.name}}' id="userName" name="userName">
                <label for="userLocation">Location: &ensp; </label>
                <input class="form-control mr-sm-2" type="text" value='{{vm.location}}' id="userLocation" name="userLocation">
                <label for="userBio">Brief Bio: &ensp; </label>
                <input class="form-control mr-sm-2" type="text" value='{{vm.Bio}}' id="userBio" name="userBio">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">GitHub Social</h5>
                <div id="chartdivSocial" style="width: 100%; height: 200px; background-color: #FFFFFF;" ></div>
              </div>
            </div>
          </div>
        </div>
        <div id="chartdivLang" style="width: 100%; height: 400px; background-color: #FFFFFF;" >
        </div>
        <input name="userGitHubLangList" id="LangList" style="visibility:hidden"action ="insert.php" method="POST"/>
        <div class="col=md-4 text-center" style="text-align:middle;">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="button" onclick="continueSurveyGitHubUser()">Continue Survey</button>
        </div>
      </div>
    </div>

    <div id="dvNoGitHubData"style="display: none">
      <p>No worries. We will just start with a basic question then.</p>
      <div class="card" id="dvBasicQuestionsCard" >
        <div class="card-body">

        <!-- <div class="form-group"> -->
            <label for="userName2">Name: &ensp; </label>
            <input class="form-control mr-sm-2" type="text" placeholder="Name" id="userName2" name="userName2">
            <label for="userLocation2">Location: &ensp; </label>
            <input class="form-control mr-sm-2" type="text" placeholder="Location" id="userLocation2" name="userLocation2">
            <label for="userBio2">Brief Bio: &ensp; </label>
            <input class="form-control mr-sm-2" type="text" placeholder="Bio" id="userBio2" name="userBio2">
            <!-- 3 input fields will go here -->
            <label for="exampleFormControlSelect2">What languages do you usually use?</label>
            <select multiple class="form-control" id="langMultiSelect" name="userLangList">
                        <option>C</option>
                        <option>C++</option>
                        <option>Python</option>
                        <option>C#</option>
                        <option>CSS</option>
                        <option>HTML</option>
                        <option>Java</option>
                        <option>JavaScript</option>
                        <option>Objective-C</option>
                        <option>ApacheConf</option>
                        <option>PHP</option>
                        <option>Makefile</option>
                        <option>Ruby</option>
                        <option>Swift</option>
                        <option>Clojure</option>
                        <option>Shell</option>
                        <option>CMake</option>
                        <option>Elixir</option>
                        <option>Elm</option>
                        <option>Jupyter Notebook</option>
                        <option>Erlang</option>
                        <option>Perl</option>
                        <option>D</option>
                        <option>Lua</option>
                        <option>Pascal</option>
                        <option>Haskell</option>
                        <option>Handlebars</option>
                        <option>PLpgSQL</option>
                        <option>SQLPL</option>
                        <option>CoffeeScript</option>
                        <option>Vue</option>
                        <option>ASP</option>
                        <option>Assembly</option>
                        <option>Awk</option>
                        <option>Objective-C++</option>
                        <option>R</option>
                        <option>Scala</option>
                        <option>Scilab</option>
                        <option>TeX</option>
                        <option>UnrealScript</option>
                        <option>VimL</option>
                        <option>XSLT</option>
                        <option>Go</option>
                        <option>Batchfile</option>
                        <option>Protocol Buffer</option>
                        <option>AutoHotkey</option>
                        <option>TypeScript</option>
                        <option>Rust</option>
                        <option>Vim script</option>
                        <option>ActionScript</option>
                        <option>Puppet</option>
                        <option>Prolog</option>
                        <option>Scheme</option>
                        <option>Smalltalk</option>
                        <option>GLSL</option>
                        <option>Roff</option>
                        <option>Visual Basic</option>
                        <option>Inno Setup</option>
                        <option>LiveScript</option>
                        <option>Racket</option>
                        <option>HLSL</option>
                        <option>ShaderLab</option>
                        <option>Arduino</option>
                        <option>Matlab</option>
                        <option>BitBake</option>
                        <option>Limbo</option>
                        <option>M</option>
                        <option>DIGITAL Command Language</option>
                        <option>Groff</option>
                        <option>Emacs Lisp</option>
                        <option>Groovy</option>
                        <option>Web Ontology Language</option>
                        <option>Cuda</option>
                        <option>Smarty</option>
                        <option>Max</option>
                        <option>Processing</option>
                        <option>Pure Data</option>
                        <option>Rebol</option>
                        <option>SuperCollider</option>
                        <option>AMPL</option>
                        <option>OCaml</option>
                        <option>Standard ML</option>
                        <option>Fortran</option>
                        <option>PowerShell</option>
                        <option>Lex</option>
                        <option>SourcePawn</option>
                        <option>Yacc</option>
                        <option>Bison</option>
                        <option>Forth</option>
                        <option>Modelica</option>
                        <option>Perl6</option>
                        <option>Tcl</option>
                        <option>AGS Script</option>
                        <option>Gnuplot</option>
                        <option>QML</option>
                        <option>M4</option>
                        <option>Kotlin</option>
                        <option>Thrift</option>
                        <option>ANTLR</option>
                        <option>FreeMarker</option>
                        <option>Brainfuck</option>
                        <option>Common Lisp</option>
                        <option>Coq</option>
                        <option>E</option>
                        <option>GAP</option>
                        <option>Jasmin</option>
                        <option>Logos</option>
                        <option>OpenEdge ABL</option>
                        <option>Red</option>
                        <option>Verilog</option>
                        <option>BlitzBasic</option>
                        <option>MQL5</option>
                        <option>NSIS</option>
                        <option>Gherkin</option>
                        <option>ColdFusion</option>
                        <option>QMake</option>
                        <option>Eagle</option>
                        <option>LSL</option>
                        <option>DOT</option>
                        <option>Julia</option>
                        <option>LLVM</option>
                        <option>PostScript</option>
                        <option>Nginx</option>
                        <option>SMT</option>
                        <option>Nix</option>
                        <option>Apex</option>
                        <option>FORTRAN</option>
                        <option>IDL</option>
                        <option>RenderScript</option>
                        <option>KiCad</option>
                        <option>XS</option>
                        <option>Haxe</option>
                        <option>PLSQL</option>
                        <option>Cucumber</option>
                        <option>DTrace</option>
                        <option>Meson</option>
                        <option>AppleScript</option>
                        <option>Arc</option>
                        <option>AspectJ</option>
                        <option>HCL</option>
                        <option>Pony</option>
                        <option>PAWN</option>
                        <option>Crystal</option>
                        <option>Gettext Catalog</option>
                        <option>F#</option>
                        <option>Mako</option>
                        <option>eC</option>
                        <option>xBase</option>
                        <option>Kit</option>
                        <option>sed</option>
                        <option>XML</option>
                        <option>Dart</option>
                        <option>Liquid</option>
                        <option>FLUX</option>
                        <option>SRecode Template</option>
                        <option>AutoIt</option>
                        <option>Mathematica</option>
                        <option>Stan</option>
                        <option>GDB</option>
                        <option>Vala</option>
                        <option>Nimrod</option>
                        <option>SaltStack</option>
                        <option>Ragel in Ruby Host</option>
                        <option>VHDL</option>
                        <option>WebIDL</option>
                        <option>SQF</option>
                        <option>nesC</option>
                        <option>Component Pascal</option>
                        <option>GCC Machine Description</option>
                        <option>Hack</option>
                        <option>PigLatin</option>
                        <option>LabVIEW</option>
                        <option>PureScript</option>
                        <option>Mercury</option>
                        <option>Objective-J</option>
                        <option>LilyPond</option>
                        <option>XQuery</option>
                        <option>Isabelle</option>
                        <option>NewLisp</option>
                        <option>Game Maker Language</option>
                        <option>OpenSCAD</option>
                        <option>Squirrel</option>
                        <option>Gosu</option>
                        <option>Uno</option>
                        <option>Stata</option>
                        <option>Cap'n Proto</option>
                        <option>Diff</option>
                        <option>API Blueprint</option>
                        <option>GDScript</option>
                        <option>Redcode</option>
                        <option>EmberScript</option>
                        <option>PureBasic</option>
                        <option>SystemVerilog</option>
                        <option>Ragel</option>
                        <option>Io</option>
                        <option>ChucK</option>
                        <option>Idris</option>
                        <option>Cool</option>
                        <option>Click</option>
                        <option>Pike</option>
                        <option>JSONiq</option>
                        <option>POV-Ray SDL</option>
                        <option>Xtend</option>
                        <option>Ada</option>
                        <option>Modula-2</option>
                        <option>Slash</option>
                        <option>q</option>
                        <option>Solidity</option>
                        <option>NetLogo</option>
                        <option>ABAP</option>
                        <option>COBOL</option>
                        <option>Cirru</option>
                        <option>Eiffel</option>
                        <option>Lean</option>
                        <option>Mask</option>
                        <option>Perl 6</option>
                        <option>P4</option>
                        <option>Nu</option>
                        <option>TLA</option>
                        <option>Delphi</option>
                        <option>APL</option>
                        <option>Lasso</option>
                        <option>XC</option>
                        <option>CLIPS</option>
                        <option>Clarion</option>
                        <option>Module Management System</option>
                        <option>SAS</option>
                        <option>MAXScript</option>
                        <option>VCL</option>
                        <option>Graphviz (DOT)</option>
                        <option>RAML</option>
                        <option>Monkey</option>
                        <option>RobotFramework</option>
                        <option>AngelScript</option>
                        <option>Bro</option>
                        <option>Augeas</option>
                        <option>Smali</option>
                        <option>Ceylon</option>
                        <option>MoonScript</option>
                        <option>DM</option>
                        <option>RPC</option>
                        <option>Fancy</option>
                        <option>Ecl</option>
                        <option>Papyrus</option>
                        <option>Csound Score</option>
                        <option>mupad</option>
                        <option>Agda</option>
                        <option>Turing</option>
                        <option>Parrot</option>
                        <option>Volt</option>
                        <option>SQL</option>
                        <option>Dylan</option>
                        <option>Nim</option>
                        <option>HyPhy</option>
                        <option>CartoCSS</option>
                        <option>Ren'Py</option>
                        <option>Self</option>
                        <option>JFlex</option>
                        <option>BlitzMax</option>
                        <option>Befunge</option>
                        <option>XProc</option>
                        <option>Nemerle</option>
                        <option>Metal</option>
                        <option>ooc</option>
                        <option>Zephir</option>
                        <option>Frege</option>
                        <option>Opa</option>
                        <option>Terra</option>
                        <option>EQ</option>
                        <option>1C Enterprise</option>
                        <option>Boo</option>
                        <option>Alloy</option>
                        <option>Cycript</option>
                        <option>LOLCODE</option>
                        <option>Genshi</option>
                        <option>Pan</option>
                        <option>Csound</option>
                        <option>Pep8</option>
                        <option>REXX</option>
                        <option>Grammatical Framework</option>
                        <option>Mirah</option>
                        <option>Common Workflow Language</option>
                        <option>wdl</option>
                        <option>Filebench WML</option>
                        <option>PicoLisp</option>
                        <option>Chapel</option>
                        <option>Rascal</option>
                        <option>Csound Document</option>
                        <option>Oz</option>
                        <option>Clean</option>
                        <option>IGOR Pro</option>
                        <option>Hy</option>
                        <option>HiveQL</option>
                        <option>LookML</option>
                        <option>Bluespec</option>
                        <option>Logtalk</option>
                        <option>Propeller Spin</option>
                        <option>Xojo</option>
                        <option>J</option>
                        <option>NCL</option>
                        <option>DCPU-16 ASM</option>
                        <option>Charity</option>
                        <option>Golo</option>
                        <option>Inform 7</option>
                        <option>MQL4</option>
                        <option>REALbasic</option>
                        <option>CWeb</option>
                        <option>Fantom</option>
                        <option>Harbour</option>
                        <option>WebAssembly</option>
                        <option>Oxygene</option>
                        <option>Brightscript</option>
                        <option>Zimpl</option>
                        <option>Factor</option>
                        <option>Ioke</option>
                        <option>Nextflow</option>
                        <option>KRL</option>
                        <option>Dogescript</option>
                        <option>ATS</option>
                        <option>Shen</option>
                        <option>Myghty</option>
                        <option>Moocode</option>
                        <option>Nit</option>
                        <option>ShellSession</option>
                        <option>MTML</option>
                        <option>Ballerina</option>
                        <option>TI Program</option>
                        <option>RUNOFF</option>
                        <option>UrWeb</option>
                        <option>Ox</option>
                        <option>TXL</option>
                        <option>ECL</option>
                        <option>XPages</option>
                        <option>PogoScript</option>
                        <option>NetLinx</option>
                        <option>wisp</option>
                        <option>KiCad Layout</option>
                        <option>Jolie</option>
                        <option>DataWeave</option>
                        <option>GAMS</option>
                        <option>Nearley</option>
                        <option>Genie</option>
                        <option>Opal</option>
                        <option>Markdown</option>
                        <option>PowerBuilder</option>
                        <option>Tea</option>
                        <option>LoomScript</option>
                        <option>Grace</option>
                        <option>NetLinx+ERB</option>
                        <option>Omgrofl</option>
                        <option>X10</option>
                        <option>Glyph</option>
                        <option>Rouge</option>
                        <option>LFE</option>
                        <option>Ring</option>
                        <option>KiCad Schematic</option>
                      </select>
                    <!--</div>-->
                  <div class="col=md-4 text-center" style="text-align:middle;">
                    <button class="btn btn-outline-dark my-2 my-sm-0" style="text-align:middle;" type="button" onclick="continueSurvey()">Continue Survey</button>
                  </div>
              <!--  <div id="chartdivLang" style="width: 100%; height: 175px; background-color: #FFFFFF;" ></div> -->
                </div>
              </div>
            </div>

          <!--  This Accordion will hold all the additional questions -->
            <div id="dvTopicsAccordion" style="display: none" >
              <div id="dvJavaScriptLibraryCardFull" class="card">
                <div class="card-header" id="dvJavaScriptLibraryQuestions">
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#dvJavaScriptLibraryCard" aria-expanded="false" aria-controls="dvJavaScriptLibraryCard">
                  JavaScript Libraries
                  </button>
                  </h5>
                </div>

                <div id="dvJavaScriptLibraryCard" class="collapse" aria-labelledby="dvJavaScriptLibraryQuestions" data-parent="#dvTopicsAccordion">
                  <div class="card-body">
                    You have identified that you are a JavaScript dev. Would you please select libraries you often use:
                    <div class="form-check" >
                      <input class="form-check-input" type="checkbox" value="" id="chkJavaScriptjQuery">
                      <label class="form-check-label" for="chkJavaScriptjQuery">
                      jQuery
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkJavaScriptBackBoneJS">
                      <label class="form-check-label" for="chkJavaScriptBackBoneJS">
                      BackBoneJS
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkJavaScriptD3">
                      <label class="form-check-label" for="chkJavaScriptD3">
                        D3.js
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkJavaScriptReact">
                      <label class="form-check-label" for="chkJavaScriptReact">
                        React
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkJavaScriptJQueryUI">
                      <label class="form-check-label" for="chkJavaScriptJQueryUI">
                        jQuery UI
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkJavaScriptJQueryMobile">
                      <label class="form-check-label" for="chkJavaScriptJQueryMobile">
                        jQuery Mobile
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkJavaScriptUnderscore">
                      <label class="form-check-label" for="chkJavaScriptUnderscore">
                        Underscore.js
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkJavaScriptMoment">
                      <label class="form-check-label" for="chkJavaScriptMoment">
                        Moment.js
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkJavaScriptLodash">
                      <label class="form-check-label" for="chkJavaScriptLodash">
                        Lodash
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card" id="dvFrontEndFrameworksFull">
                <div class="card-header" id="dvFrontEndFrameworks">
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Front End Frameworks
                  </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="dvFrontEndFrameworks" data-parent="#dvTopicsAccordion">
                  <div class="card-body">
                    As a front end developer, what are your go to frameworks?
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkFrontEndBootstrap">
                      <label class="form-check-label" for="chkFrontEndBootstrap">
                      Bootstrap
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkFrontEndFoundation">
                      <label class="form-check-label" for="chkFrontEndFoundation">
                      Foundation
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkFrontEndSemantic">
                      <label class="form-check-label" for="chkFrontEndSemantic">
                      Semantic UI
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkFrontEndUikit">
                      <label class="form-check-label" for="chkFrontEndUikit">
                      uikit
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card" id="dvDatabasesFull">
                <div class="card-header" id="dvDatabases">
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Databases
                  </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="dvDatabases" data-parent="#dvTopicsAccordion">
                  <div class="card-body">
                    Out of the following options, which databeses have you used in the back end of your apps?
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkDatabaseMySQL">
                      <label class="form-check-label" for="chkDatabaseMySQL">
                      MySQL
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkDatabaseMariaDB">
                      <label class="form-check-label" for="chkDatabaseMariaDB">
                      MariaDB
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkDatabaseMongoDB">
                      <label class="form-check-label" for="chkDatabaseMongoDB">
                      MongoDB
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkDatabaseRedis">
                      <label class="form-check-label" for="chkDatabaseRedis">
                      Redis
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkDatabasePostgreSQL">
                      <label class="form-check-label" for="chkDatabasePostgreSQL">
                      PostgreSQL
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card" id="dvCSSPreprocessorsFull">
                <div class="card-header" id="dvCSSPreprocessors">
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  CSS Preprocessors
                  </button>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="dvCSSPreprocessors" data-parent="#dvTopicsAccordion">
                  <div class="card-body">
                    Do you use any of the following CSS preprocessors? If so select any that you use:
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkCSSPreprocessorsSass">
                      <label class="form-check-label" for="chkCSSPreprocessorsSass">
                      Sass
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkCSSPreprocessorsLess">
                      <label class="form-check-label" for="chkCSSPreprocessorsLess">
                      Less
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkCSSPreprocessorsStylus">
                      <label class="form-check-label" for="chkCSSPreprocessorsStylus">
                      Stylus
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="dvTextEditors">
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Text Editors
                  </button>
                  </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="dvTextEditors" data-parent="#dvTopicsAccordion">
                  <div class="card-body">
                    Text editors are obviously a core tool for developers; of the following list which ones are you familiar with?
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkTextEditors">
                      <label class="form-check-label" for="chkTextEditors">
                      Atom
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkTextEditorsSublime">
                      <label class="form-check-label" for="chkTextEditorsSublime">
                      Sublime
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkTextEditorsNotepad++">
                      <label class="form-check-label" for="chkTextEditorsNotepad++">
                      Notepad++
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkTextEditorsVisualStudioCode">
                      <label class="form-check-label" for="chkTextEditorsVisualStudioCode">
                      Visual Studio Code
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkTextEditorsTextMate">
                      <label class="form-check-label" for="chkTextEditorsTextMate">
                      TextMate
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkTextEditorsCoda">
                      <label class="form-check-label" for="chkTextEditorsCoda">
                      Coda 2
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkTextEditorsWebStorm">
                      <label class="form-check-label" for="chkTextEditorsWebStorm">
                      WebStorm
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkTextEditorsVim">
                      <label class="form-check-label" for="chkTextEditorsVim">
                      Vim
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkTextEditorsBrackets">
                      <label class="form-check-label" for="chkTextEditorsBrackets">
                      Brackets
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkTextEditorsEmacs">
                      <label class="form-check-label" for="chkTextEditorsEmacs">
                      Emacs
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkTechkTextEditorsDreamweaverxtEditors">
                      <label class="form-check-label" for="chkTextEditorsDreamweaver">
                      Dreamweaver
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="dvMarkdownEditors">
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Markdown Editors
                  </button>
                  </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="dvMarkdownEditors" data-parent="#dvTopicsAccordion">
                  <div class="card-body">
                    Markdown editors can be similarly important. From the following list select any that you have used regularly:
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkMarkdownEditorsStackEdit">
                      <label class="form-check-label" for="chkMarkdownEditorsStackEdit">
                      StackEdit
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkMarkdownEditorsDillinger">
                      <label class="form-check-label" for="chkMarkdownEditorsDillinger">
                      Dillinger
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkMarkdownEditorsMou">
                      <label class="form-check-label" for="chkMarkdownEditorsMou">
                      Mou
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkMarkdownEditorsTexts">
                      <label class="form-check-label" for="chkMarkdownEditorsTexts">
                      Texts
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card" id="dvIconsFull">
                <div class="card-header" id="dvIcons">
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  Icons
                  </button>
                  </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="dvIcons" data-parent="#dvTopicsAccordion">
                  <div class="card-body">
                    It is always nice to have great icons in your apps. Have you used any of these icon libraries? Select all that you are familiar with:
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkIconsFontAwesome">
                      <label class="form-check-label" for="chkIconsFontAwesome">
                      Font Awesome
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkIconsIconMonster">
                      <label class="form-check-label" for="chkIconsIconMonster">
                      IconMonster
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkIconsIcons8">
                      <label class="form-check-label" for="chkIconsIcons8">
                      Icons8
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkIconsIconFinder">
                      <label class="form-check-label" for="chkIconsIconFinder">
                      IconFinder
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkIconsFontello">
                      <label class="form-check-label" for="chkIconsFontello">
                      Fontello
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="dvGitClients">
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  Git Clients
                  </button>
                  </h5>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="dvGitClients" data-parent="#dvTopicsAccordion">
                  <div class="card-body">
                    Using Git to manage code development is becoming an important piece of web dev. Which of the following services are you familiar with?
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkGitClientsSourceTree">
                      <label class="form-check-label" for="chkGitClientsSourceTree">
                      SourceTree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkGitClientsGitKracken">
                      <label class="form-check-label" for="chkGitClientsGitKracken">
                      GitKracken
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkGitClientsTowerTwo">
                      <label class="form-check-label" for="chkGitClientsTowerTwo">
                      Tower 2
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkGitClientsGitHubClient">
                      <label class="form-check-label" for="chkGitClientsGitHubClient">
                      GitHub Client
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkGitClientsGogs">
                      <label class="form-check-label" for="chkGitClientsGogs">
                      Gogs
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkGitClientsGitLab">
                      <label class="form-check-label" for="chkGitClientsGitLab">
                      GitLab
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="dvExperimenting">
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                  Experimenting
                  </button>
                  </h5>
                </div>
                <div id="collapseEleven" class="collapse" aria-labelledby="dvExperimenting" data-parent="#dvTopicsAccordion">
                  <div class="card-body">
                    There are some great alternatives to full blown collaboration software sharing code with other developers. Out of these four options which ones are you familiar with?
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkExperimentingJSBin">
                      <label class="form-check-label" for="chkExperimentingJSBin">
                      JS Bin
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkExperimentingJSfiddle">
                      <label class="form-check-label" for="chkExperimentingJSfiddle">
                      JSfiddle
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkExperimentingCodeshare">
                      <label class="form-check-label" for="chkExperimentingCodeshare">
                      Codeshare
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkExperimentingDabblet">
                      <label class="form-check-label" for="chkExperimentingDabblet">
                      Dabblet
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="dvCollaboration Tools">
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTweleve" aria-expanded="false" aria-controls="collapseTweleve">
                  Collaboration Tools
                  </button>
                  </h5>
                </div>
                <div id="collapseTweleve" class="collapse" aria-labelledby="dvCollaborationTools" data-parent="#dvTopicsAccordion">
                  <div class="card-body">
                    Working remotely is an important part of many dev teams, as such so are collaboration tools. Out of the list below which tools are you familiar with?
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkCollaborationToolsSlack">
                      <label class="form-check-label" for="chkCollaborationToolsSlack">
                      Slack
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkCollaborationToolsTrello">
                      <label class="form-check-label" for="chkCollaborationToolsTrello">
                      Trello
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkCollaborationToolsGlip">
                      <label class="form-check-label" for="chkCollaborationToolsGlip">
                      Glip
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkCollaborationToolsAsana">
                      <label class="form-check-label" for="chkCollaborationToolsAsana">
                      Asana
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkCollaborationToolsJira">
                      <label class="form-check-label" for="chkCollaborationToolsJira">
                      Jira
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="dvWebDevCommunities">
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                  Web Dev Communities
                  </button>
                  </h5>
                </div>
                <div id="collapseFifteen" class="collapse" aria-labelledby="dvWebDevCommunities" data-parent="#dvTopicsAccordion">
                  <div class="card-body">
                    The internet is full of countless comunities, and some of them even provide constructive influences! Out of the commnities listed below, which ones have you participated in?
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesStackOverflow">
                      <label class="form-check-label" for="chkWebDevCommunitiesStackOverflow">
                      Stack Overflow
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesFrontendFront">
                      <label class="form-check-label" for="chkWebDevCommunitiesFrontendFront">
                      Front-end Front
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesHasnode">
                      <label class="form-check-label" for="chkWebDevCommunitiesHasnode">
                      Hasnode
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesRefind">
                      <label class="form-check-label" for="chkWebDevCommunitiesRefind">
                      Refind
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesGoogleWebDevelopersGroup">
                      <label class="form-check-label" for="chkWebDevCommunitiesGoogleWebDevelopersGroup">
                      Google+ Web Developers Group
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesFacebookWordPressFrontendDevelopersGroup">
                      <label class="form-check-label" for="chkWebDevCommunitiesFacebookWordPressFrontendDevelopersGroup">
                      Facebook WordPress Front-end Developers Group
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesLinkedInWebDesignDevelopmentProfessionalsGroup">
                      <label class="form-check-label" for="chkWebDevCommunitiesLinkedInWebDesignDevelopmentProfessionalsGroup">
                      LinkedIn Web Design and Development Professionals Group
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitieLinkedInWebSiteDevelopmentGroups">
                      <label class="form-check-label" for="chkWebDevCommunitieLinkedInWebSiteDevelopmentGroups">
                      LinkedIn Web Site Development Group
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesLinkedInPHPDeveloperGroup">
                      <label class="form-check-label" for="chkWebDevCommunitiesLinkedInPHPDeveloperGroup">
                      LinkedIn PHP Developer Group
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesLinkedInWordPressDevelopersGroup">
                      <label class="form-check-label" for="chkWebDevCommunitiesLinkedInWordPressDevelopersGroup">
                      LinkedIn WordPress Developers Group
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesWebdeveloperCom">
                      <label class="form-check-label" for="chkWebDevCommunitiesWebdeveloperCom">
                      Webdeveloper.com
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesSitepointForums">
                      <label class="form-check-label" for="chkWebDevCommunitiesSitepointForums">
                      Sitepoint Forums
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesRperfmatters">
                      <label class="form-check-label" for="chkWebDevCommunitiesRperfmatters">
                      /r/perfmatters
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevCommunitiesRwebdev">
                      <label class="form-check-label" for="chkWebDevCommunitiesRwebdev">
                      /r/webdev
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="dvWebDevelopmentNewsletters">
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                  Web Development Newsletters
                  </button>
                  </h5>
                </div>
                <div id="collapseSixteen" class="collapse" aria-labelledby="dvWebDevelopmentNewsletters" data-parent="#dvTopicsAccordion">
                  <div class="card-body">
                    Similarly to communities, the interet has no shortage of newsletters. Out of the dev newsletters listed below which ones are you familiar with?
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevelopmentNewsletterSwdrlinfo">
                      <label class="form-check-label" for="chkWebDevelopmentNewsletterSwdrlinfo">
                      wdrl.info
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevelopmentNewslettersWebopsweekly">
                      <label class="form-check-label" for="chkWebDevelopmentNewslettersWebopsweekly">
                      webopsweekly.com
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevelopmentNewslettersWebToolsWeekly">
                      <label class="form-check-label" for="chkWebDevelopmentNewslettersWebToolsWeekly">
                      web tools weekly
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevelopmentNewslettersFreshbrewedCo">
                      <label class="form-check-label" for="chkWebDevelopmentNewslettersFreshbrewedCo">
                      freshbrewed.co
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevelopmentNewslettersSmashingMagazine">
                      <label class="form-check-label" for="chkWebDevelopmentNewslettersSmashingMagazine">
                      smashingmagazine.com
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevelopmentNewslettersFrontendDevWeekly">
                      <label class="form-check-label" for="chkWebDevelopmentNewslettersFrontendDevWeekly">
                      front-end dev weekly
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevelopmentNewslettersFridayFrontend">
                      <label class="form-check-label" for="chkWebDevelopmentNewslettersFridayFrontend">
                      friday front-end
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="chkWebDevelopmentNewslettersDevTips">
                      <label class="form-check-label" for="chkWebDevelopmentNewslettersDevTips">
                      /dev tips
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="col=md-4 text-center" id="dvSubmitSurvey" style="text-align:middle; display: none;">
              <button id="btnSubmitSurvey" class="btn btn-outline-dark my-2 my-sm-0 btn-lg" style="text-align:middle;" type="submit" name="submit"> Submit Survey </button>
            </div>
          </form>
          <br>
        </main>
      </Body>
