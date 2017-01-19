//gets data from php directly stored in database

function loadDoc(tid, tab, col) {
    //var tid = "demo";
    //var tab = "loginreg";
    //var col = "name";
    "use strict";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById(tid).value = xhttp.responseText;  }  };
    xhttp.open("GET", "/php/functioncaller.php?p1=" + tab + "&p2=" + col, true);
    xhttp.send();
}

function loadDocc(tid, tab, col){
    //var tid = "demo";
    //var tab = "loginreg";
    //var col = "name";
    "use strict";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById(tid).innerHTML = xhttp.responseText;  }      
    };
    xhttp.open("GET", "/php/functioncaller.php?p1=" + tab + "&p2=" + col, true);
    xhttp.send();
}

function loadDoccc(tid, tab, col) {
    //var tid = "demo";
    //var tab = "loginreg";
    //var col = "name";
    "use strict";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById(tid).placeholder = xhttp.responseText; }   };
    xhttp.open("GET", "/php/functioncaller.php?p1=" + tab + "&p2=" + col, true);
    xhttp.send();
}


//loads previous data from database to edit profile.html
function onload() {
    "use strict";
    loadDoc('FullName', 'student', 'name');
    loadDoc('dob', 'student', 'dob');
    loadDoccc('dob', 'student', 'dob');
    loadDoc('mobile', 'student', 'mobile');
    loadDoc('address', 'student', 'address');
    loadDoc('nation', 'student', 'nationality');
    loadDoc('pan', 'student', 'panno');
    loadDoc('pass', 'student', 'passportno');
    loadDoc('from', 'student', 'EXPECTEDSALARYFROM');
    loadDoc('to', 'student', 'EXPECTEDSALARYto');
    loadDoc('will', 'student', 'WILLINGTORELOCATE');
    loadDocc('will', 'student', 'WILLINGTORELOCATE');
    loadDoc('10th', 'student', 'sslcpercent');
    loadDoccc('10th', 'student', 'sslcpercent');
    loadDoc('10yop', 'student', 'sslcyop');
    loadDocc('10yop', 'student', 'sslcyop');
    loadDoc('12th', 'student', 'twelthpercent');
    loadDoccc('12th', 'student', 'twelthpercent');
    loadDoc('12yop', 'student', 'twelthyop');
    loadDocc('12yop', 'student', 'twelthyop');
    loadDoc('branch', 'student', 'branch');
    loadDocc('branch', 'student', 'branch');
    loadDoc('degree', 'student', 'degree');
    loadDocc('degree', 'student', 'degree');
    loadDoccc('cgpa', 'student', 'cgpa');
    loadDoc('cgpa', 'student', 'cgpa');
    loadDoc('yop', 'student', 'yop');
    loadDocc('yop', 'student', 'yop');
    loadDoc('exp', 'student', 'EXPERIENCE');
    loadDoc('comp', 'student', 'company');
    loadDoc('key', 'student', 'KEYSKILLS');
        
}



//loads previous data from database to profileview.html
function onloadp() {
    "use strict";
    loadDocc('name', 'student', 'name');
    loadDocc('dob', 'student', 'dob');
    loadDocc('gender', 'student', 'gender');
    loadDocc('status', 'student', 'maritalstatus');
    loadDocc('abhi', 'student', 'MOBILE');
    loadDocc('add', 'student', 'address');
    loadDocc('nation', 'student', 'nationality');
    loadDocc('pan', 'student', 'panno');
    loadDocc('pass', 'student', 'passportno');
    
    
    
    //loadDoccc('from', 'student', 'EXPECTEDSALARYFROM');
    //loadDoccc('to', 'student', 'EXPECTEDSALARYto');
    //loadDocc('will', 'student', 'WILLINGTORELOCATE');// to display selected values
    loadDocc('10percent', 'student', 'sslcpercent');
    loadDocc('10yop', 'student', 'sslcyop');
    loadDocc('12percent', 'student', 'twelthpercent');
    loadDocc('12yop', 'student', 'twelthyop');
    loadDocc('branch', 'student', 'branch');
    loadDocc('degree', 'student', 'degree');
    loadDocc('cgpa', 'student', 'cgpa');
    loadDocc('yop', 'student', 'yop');
    loadDocc('exp', 'student', 'EXPERIENCE');
    loadDocc('comp', 'student', 'company');
    loadDocc('key', 'student', 'KEYSKILLS');
        
}



// data retrival

function retrive() {
   
    "use strict";
    var degree=document.getElementById().value;
    var degree=document.getElementById().value;
    var degree=document.getElementById().value;
    var degree=document.getElementById().value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById(tid).value = xhttp.responseText;  }  };
    xhttp.open("GET", "/php/retrive.php?p1=" + tab + "&p2=" + col, true);
    xhttp.send();
}