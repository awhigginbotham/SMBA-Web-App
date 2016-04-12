<?php
    //redirect if not logged in
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }

    //database connection
    require_once(__DIR__.'/db_connection.php');

    //header
    require_once(__DIR__.'/header.php');

?>

<!--hide entry table until lake and number of anglers has been entered and submitted-->
<script type="text/javascript">
    $(document).ready(function(){
        $('.entryTable').hide();
    })
</script>

<!-- display entry table after number of anglers and lake has been set -->
<?php
if(isset($_POST["lake"]) && $_POST["lake"]!="" && isset($_POST["numberAnglers"]) && $_POST["numberAnglers"]!=""){?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.entryTable').show();
        });

    </script>
    <?php } ?>

<!--set popup to display if lake name and angler number are not filled in when the form is submitted -->


    <form action="" method="post">
        <div class="numberLake">
            <input type="text" name="lake" placeholder="Enter Lake Name" required>
            <input type="number" name="numberAnglers" placeholder="How many are fishing?" required>
            <input type="submit" value="Create Entry Form">
        </div>

        <div class="entryTable">
            <table class="resultsEntry">
                <thead>
                    <th>Name</th>
                    <th>Entry Fee</th>
                    <th>Fish Caught</th>
                    <th>Fish Alive </th>
                    <th>Weight</th>
                    <th>Lunker Type</th>
                    <th>Lunker Weight</th>
                </thead>

                <tbody>
                <br>
                <?php
                    $rowAmount = $_POST["numberAnglers"];
                    while($rowAmount > 0){?>
                        <tr><td><input type="text" name="fullname[]"></td><td><input type="text" name="entryFee[]"></td><td><input type="text" name="fishCaught[]"></td><td><input type="text" name="fishAlive[]"></td>
                        <td><input type="text" name="weight[]"></td><td><input type="text" name="lunkerType[]"></td><td><input type="text" name="lunkerWeight[]"></td></tr><?php
                        --$rowAmount;
                    }?>


                </tbody>

                <tfoot>
                    <tr><th colspan="7">Smoky Mountain Bass Anglers</th></tr>
                </tfoot>


        </table>
        </div>
    </form>
</body>

</html>

