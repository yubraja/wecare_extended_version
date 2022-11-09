<script>
//Get the current link
var link = window.location.href;

//Replace all content before ? with ""
link = link.replace("./try.php?","");

//Display content
document.write("Page_One.html contains:" + link + "");

</script>


