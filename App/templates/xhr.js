function getXmlHttp() {
    var xmlhttp;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e1) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }

    return xmlhttp;
}

function exampleInsert() {
    var req = getXmlHttp();
    var title = document.getElementById('title').value;
    var date = document.getElementById('date').value;
    var text = document.getElementById('text').value;
    var params = 'title=' + title + '&date=' + date + '&text=' + text;
    req.open('POST', 'index.php?ctrl=Admin&act=InsertOne', true);
    req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    req.onreadystatechange = function () {
        if (req.readyState == 4) {
            if (req.status == 200) {
                alert(req.responseText)
            }
        }
    };
    req.send(params)
}


function exampleUpdate() {
    var req = getXmlHttp();
    var id = document.getElementById('id').value;
    var title = document.getElementById('title').value;
    var date = document.getElementById('date').value;
    var text = document.getElementById('text').value;
    var params = 'id=' + id + '&title=' + title + '&date=' + date + '&text=' + text;
    req.open('POST', 'index.php?ctrl=Admin&act=EditOne', true);
    req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    req.onreadystatechange = function () {
        if (req.readyState == 4) {
            if (req.status == 200) {
                alert(req.responseText)
            }
        }
    };
    req.send(params)
}

function exampleInsertCom() {
    var req = getXmlHttp();
    var page_id = document.getElementById('page_id').value;
    var autor_com = document.getElementById('autor_com').value;
    var text_com = document.getElementById('text_com').value;
    var params = 'page_id=' + page_id + '&autor_com=' + autor_com + '&text_com=' + text_com;
    req.open('POST', 'index.php?ctrl=Comment&act=InsertOne', true);
    req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    req.onreadystatechange = function () {
        if (req.readyState == 4) {
            if (req.status == 200) {
                alert(req.responseText)
            }
        }
    };
    req.send(params)
}
