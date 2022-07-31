window.onload = function(){
    document.getElementsByName("mybutton").onclick = function(){
        document.getElementsByName("postvar")[0].value = this.value;
        document.forms.myform.submit();
    }
};