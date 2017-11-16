function validasi() {
    var blankForm = [];
    var teknlogiChecked = [];
    var nama        = document.forms["addData"]["nama"].value;
    var email       = document.forms["addData"]["email"].value;
    var teknlogi    = document.forms["addData"]["tek[]"];
    var pengalaman  = document.forms["addData"]["tentang"].value;
    for (var i=0; i<teknlogi.length; i++) {
        if(teknlogi[i].checked){
            teknlogiChecked.push(teknlogi[i].value);
        }
    }
    if (nama == "") {
        blankForm.push('Nama');
        document.forms["addData"]["nama"].style.borderColor = "red";
    }
    if (email == "") {
        blankForm.push('Email');
        document.forms["addData"]["email"].style.borderColor = "red";
    }
    if (teknlogiChecked.length == 0) {
        blankForm.push('Teknologi');
    }
    if (pengalaman == "") {
        blankForm.push('Pengalaman');
        document.forms["addData"]["tentang"].style.borderColor = "red";
    }
    if(blankForm.length == 0){
        confirm('Data yang dimasukan telah lengkap, apakah anda yakin akan memasukan data milik '+ nama + '?');
        document.forms["addData"]["nama"].style.borderColor = "green";
        document.forms["addData"]["email"].style.borderColor = "green";
        document.forms["addData"]["tentang"].style.borderColor = "green";
        return true;
    }else{
        var data = "";
        for(i=0; i< blankForm.length; i++){
            if(i== blankForm.length -1){
                data += 'dan '+blankForm[i]+'.';
            }else{
                data += blankForm[i]+', ';
            }
        }
        alert('Anda belum mengisi form '+data+' Silahkan lengkapi data anda !');
        return false;
    }
}