<hhtml>
    <head>
        <title>
            Book
        </title>
    </head>
    <body>
        <form method="POST" action="insert.php">
            Book ID<input type="number" placeholder="Book ID" name="BookID"required><br><br>
            Book Name <input type="text" placeholder="Book Name" name="BookName" required><br><br>
            Author Name <input type="text" placeholder="Author Name" name="Author"><br><br>
            ISBN Number <input type="text" placeholder="ISBN Number" name="ISBN" required><br><br>
            Publisher Name <input type="text" placeholder="Publisher Name" name="Publisher"><br><br>
            <br>Publication Year<br>
            <select id="PublicationYear"name="PublicationYear">
              
              </select><br>
            <br> Book Type <br>
            Action <input type="radio" value="Action" name="BookType"><br>
            Adventure <input type="radio" value="Adventure" name="BookType"><br>
            Classics <input type="radio" value="Classics" name="BookType"><br>
            Comic Book <input type="radio" value="Comic_Book" name="BookType"><br>
            Graphic Novel <input type="radio" value="Graphic_Novel" name="BookType"><br>
            Detective <input type="radio" value="Detective" name="BookType"><br>
            Mystery <input type="radio" value="Mystery" name="BookType"><br>
            Historical Fiction <input type="radio" value="Historical_Fiction" name="BookType"><br>
            Horror <input type="radio" value="Horror" name="btype"><br>
            Literary Fiction <input type="radio" value="Literary_Fiction" name="BookType"><br>
            <br>
            Number Of Pages<br>
            <input type="range" name="Pages" min="200" max="400"> <br><br>
            <input type="submit" name="submit">
        </form>
        <script type="text/javascript">
    window.onload = function () {
        //Reference the DropDownList.
        var ddlYears = document.getElementById("PublicationYear");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = 2010; i <= currentYear; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears.appendChild(option);
        }
    };
</script>
    </body>
</hhtml>