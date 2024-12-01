<?php
include "head.php";
include "database.php";
include "navbar.php";

$id = $_GET['id'];
$sql = "SELECT * from bucketlist where id = $id;";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $placeImage = $row['placeImage'];
    $placeName = $row['placeName'];
    $locationName = $row['locationName'];
    $locationDescription = $row['locationDescription'];
    $duration = $row['duration'];
    $people = $row['people'];
    $map = $row['map'];
    $price=$row['price'];

}
// $tableKoNaam = $_GET['tableKoName'];

?>

<div style="display:flex; justify-content:space-between; border-bottom: 1px solid gray; margin:0 120px 0 120px;">
    <div>
        <div style="font-size:1.5rem;font-weight:bold;"><?php echo $placeName ?></div>
        <div style='display:flex; align-items:center;gap:20px; padding-bottom:30px;'>
            <div>81415 Reviews</div>
            <div style='display:flex; align-items:center;gap:3px;'>
                <i class='fa-solid fa-badge-check' style='color: #74C0FC;'></i>
                Recommended by 99% off users
            </div>
        </div>
    </div>

    <div
        style='display: flex; gap: 10px; border: 1px solid grey; align-items: center; padding: 5px; border-radius: 20px; width: 150px; justify-content: center; font-size: 1.5rem; height:40px;'>
        <i class='fa-regular fa-heart'></i>
        SAVE

    </div>

</div>
<div style="margin:50px 120px 0 120px; display: flex;gap:30px">
    <img src="Images/<?php echo $placeImage ?>" alt="" height="500px" width="700px">
    <iframe src="<?php echo $map ?>" width="700s" height="500" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<div
    style="display:grid; grid-template-columns:70% 30%; gap: 20px; margin:50px 120px 0 120px;border-bottom: 1px solid gray;padding-bottom:10px;">
    <div>
        <div style="display:grid; gap:10px;border-bottom: 1px solid gray;padding-bottom:20px;">
            <div style="font-size:2rem;font-weight:bold;">About</div>
            <div style="font-size:1.3rem;"><?php echo $locationDescription ?></div>
            <div style="font-size:1.3rem;">from <big><b>$<?php echo"$price"?></b></big> per adult (price varies by group size)</div>
        </div>

        <div style="display:grid;gap:10px;padding:50px 0 50px 0;border-bottom: 1px solid gray;">
            <div style="display:flex; gap:10px;font-size:1.2rem;align-items:center;">
                <i class="fa-light fa-people-group"></i>
                <p><?php echo $people ?></p>
            </div>
            <div style="display:flex; gap:10px;font-size:1.2rem;align-items:center;">
                <i class="fa-thin fa-timer"></i>
                <p><?php echo $duration ?></p>
            </div>
            <div style="display:flex; gap:10px;font-size:1.2rem;align-items:center;">
                <i class="fa-sharp fa-light fa-clock"></i>
                <p>Start Time: Check Availability </p>
            </div>
            <div style="display:flex; gap:10px;font-size:1.2rem;align-items:center;">
                <i class="fa-thin fa-ticket"></i>
                <p>Mobile Ticket</p>
            </div>
            <div style="display:flex; gap:10px;font-size:1.2rem;align-items:center;">
                <i class="fa-light fa-globe"></i>
                <p>Live Guide: English, Spanish</p>
            </div>
        </div>

        <div style="display:grid;gap:10px;padding:50px 0 50px 0">
            <div style="font-size:1.5rem;font-weight:bold;">Help</div>
            <div style="font-size:1.2rem">If you have questions about this tour or need help making your booking, we’d
                be happy to help. Just contact the number below<br>
                9876543210</div>
        </div>
    </div>
    <div style="border: 1px solid gray;padding:10px;border-radius:5px;">
        <div style="font-size:1.5rem; font-weight:bold;padding-bottom:20px;" align="center">PLAN YOUR TRIP</div>
        <div style="display:flex; font-size:1.2rem;justify-content:space-around;">
            <div
                style="display:flex;gap:10px;align-items:center;border:1px black solid;border-radius:5px;padding:10px;">
                <i class="fa-thin fa-calendar"></i>
                <div>Enter Date</div>
            </div>
            <div
                style="display:flex;gap:15px;align-items:center;border:1px black solid;border-radius:5px;padding:10px;">
                <i class="fa-light fa-people-group"></i>
                <div><select style="border:none;" class="manxe-value">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                    </select></div>
            </div>
        </div>
        <form>
        <div class="box-not-selected">
            <div style="font-size:1.5rem;font-weight:bold; display:flex; justify-content:space-around;">Group Tour In English <input type="radio" name="check"></div>
            <div style="">
                Enjoy the tour with a small group tour (maximum 17 people) with professional English tour guide. Pickup
                included
            </div>
            <div style="display:flex;gap:5px">
                <p class="manxe-number"></p> Adults X $<?php echo"$price"?>
            </div>
            <div style="display:flex;gap:5px">TOTAL <p class="total-price"></p>
            </div>
        </div>
        <div class="box-not-selected">
            <div style="font-size:1.5rem;font-weight:bold;display:flex;justify-content:space-around;">Group Tour In Spanish  <input type="radio" name="check"></div>
            <div style="">
                Enjoy the tour with a small group tour (maximum 17 people) with professional Spanish tour guide. Pickup
                included
            </div>
            <div style="display:flex;gap:5px">
                <p class="manxe-number"></p> Adults X $<?php echo $price?>
            </div>
            <div style="display:flex;gap:5px">TOTAL <p class="total-price"></p>
            </div>
        </div>
        </form>
        <div
            style="background-color:black;color:white;width:100%;display:flex; align-items:center;justify-content:center;height:50px;font-size:1.5rem;border-radius:5px;margin-top:20px;">
            Book Now</div>
    </div>
</div>

<div style="margin:50px 120px 0 120px;  display:grid; gap: 10px; padding-bottom:50px">
    <div style="font-size:1.5rem;font-weight:bold;">Reviews</div>
    <div style="display:flex; gap:10px; align-items:center;">5.0
        <div>
            <?php
            for ($i = 0; $i < 5; $i++)
                echo "                            
                                <i class='fa-solid fa-star' style='color: #FFD43B;'></i>
                                ";
            ?>
        </div>
    </div>
    <div style="display:grid; grid-template-columns:70% 30%; gap: 40px;">
        <div style='display:grid;gap:10px;border:1px grey solid;padding:0 2px 0 2px; border-radius:10px; padding:10px'>
            <div style='display:flex;align-items:center;gap:10px;padding-left:5px'>
                <div class='hello'>
                </div>
                <div style='font-weight:bold;font-size:1.2rem'>Manish Vaidya</div>
            </div>
            <div>
                <?php
                for ($i = 0; $i < 5; $i++)
                    echo "                            
                            <i class='fa-solid fa-star' style='color: #FFD43B;'></i>
                            ";
                ?>
            </div>
            <div style="text-align:justify">This tour to Abu Dubai is highly recommended and if you happen to have
                Mohammed Ali as your tour guide then you are in for a real treat. Mohammed’s knowledge and commentary
                during the tour is simply oustanding. The places visited were breathtaking and I will forever had
                wonderful memories. Thanks again Mohammed for a wonderful day and wishing you all the best.</div>
        </div>
        <div>
            <div style="font-size:1.5rem;font-weight:bold;padding-bottom:20px;">Total Tally</div>
            <div>
                <div style="display:grid; grid-template-columns:20% 80%; gap:5px;">
                    <div style="border-right:1px black solid;">80000</div>
                    <div>
                        <?php
                        for ($i = 0; $i < 5; $i++)
                            echo "                            
                                <i class='fa-solid fa-star' style='color: #FFD43B;'></i>";
                        ?>
                    </div>
                </div>

            </div>
            <div>
                <div style="display:grid; grid-template-columns:20% 80%;gap:5px;">
                    <div style="border-right:1px black solid;">80000</div>
                    <div>
                        <?php
                        for ($i = 0; $i < 4; $i++)
                            echo "                            
                                <i class='fa-solid fa-star' style='color: #FFD43B;'></i>";
                        ?>
                    </div>
                </div>

            </div>
            <div>
                <div style="display:grid; grid-template-columns:20% 80%;gap:5px;">
                    <div style="border-right:1px black solid;">80000</div>
                    <div>
                        <?php
                        for ($i = 0; $i < 3; $i++)
                            echo "                            
                                <i class='fa-solid fa-star' style='color: #FFD43B;'></i>";
                        ?>
                    </div>
                </div>

            </div>
            <div>
                <div style="display:grid; grid-template-columns:20% 80%;gap:5px;">
                    <div style="border-right:1px black solid;">80000</div>
                    <div>
                        <?php
                        for ($i = 0; $i < 2; $i++)
                            echo "                            
                                <i class='fa-solid fa-star' style='color: #FFD43B;'></i>";
                        ?>
                    </div>
                </div>

            </div>
            <div>
                <div style="display:grid; grid-template-columns:20% 80%;gap:5px;">
                    <div style="border-right:1px black solid;">80000</div>
                    <div>
                        <?php
                        for ($i = 0; $i < 1; $i++)
                            echo "                            
                                <i class='fa-solid fa-star' style='color: #FFD43B;'></i>";
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    const selectElement = document.querySelector('.manxe-value');
    const manxeNumberElements = document.querySelectorAll('.manxe-number');
    const totalPriceElements = document.querySelectorAll('.total-price');

    const pricePerAdult = Number(<?php echo json_encode($price); ?>);
    

    manxeNumberElements.forEach(el => (el.textContent = '1'));
    totalPriceElements.forEach(el => (el.textContent = '$'+pricePerAdult.toFixed(2)));

    selectElement.addEventListener('change', (event) => {
        const selectedValue = event.target.value;

        manxeNumberElements.forEach(el => (el.textContent = selectedValue));
        totalPriceElements.forEach(el => {
            const totalPrice = (selectedValue * pricePerAdult).toFixed(2);
            el.textContent = '$'+totalPrice;
        });
    });
</script>
<?php
include "footer.php";

?>