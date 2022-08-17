<footer>
        <div class="wrapper" id="footerdiv">
            <nav class="footermenu">
                <span class="title4">Main Menu</span>
            <a href="#" class="footerlinks">Home</a>
            <a href="#" class="footerlinks">About Us</a>
            <a href="#" class="footerlinks">Contacts</a>
            <a href="#" class="footerlinks">Our Products</a>
        </nav>
            <nav class="footermenu">
            <span class="title4">Styles</span>
            <a href="#" class="footerlinks">Sample1</a>
            <a href="#" class="footerlinks">Sample2</a>
            <a href="#" class="footerlinks">Sample3</a>
            <a href="#" class="footerlinks">Sample4</a>
        </nav>
        <nav class="footermenu">
            <span class="title4">Styles</span>
            <a href="#" class="footerlinks">Payments</a>
            <a href="#" class="footerlinks">Refunds</a>
            <a href="#" class="footerlinks">Availablility</a>
            <a href="#" class="footerlinks">Helps</a>
        </nav>
    </div>
    <div id="copyright">
        <div class="wrapper">
            <p id="text5">All rights reserved &copy;
                webclass 2022
            </p>
        </div>
    </div>
    </footer>
<script>
     var menuButton = document.getElementById('menu');
     var menuButton = document.getElementById('mainmenu');

menuButton.onclick=function(){
    if(navigation.style.display="flex"){
       navigation.style.display="none";
}else{
    navigation.style.display="flex";
}
}
</script>