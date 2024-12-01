<?php

if ($result && mysqli_num_rows($result) > 0) {
    // $i = 1;


    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $placeImage = $row['placeImage'];
        $placeName = $row['placeName'];
        $locationName = $row['locationName'];
        $locationDescription = $row['locationDescription'];
        $duration = $row['duration'];
        $people = $row['people'];
        $class = "";
        $saveText = "SAVE";
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $sql = "select * from favourites where username='$username'and tableId = $id";
            $output = mysqli_query($conn, $sql);
            if (mysqli_num_rows($output) > 0) {
                $class = "saved";
                $saveText = "SAVED";

            }

        }
        $flag = $row['flag'];
        echo "
        <div class='places'>
   <div class='place-img-container'>
      <img src='Images/$placeImage' alt='' height='350px' width='100%'>
   </div>
   <div style='display: grid; gap: 0.5rem;'>
      <div style='font-weight: bold;'>$i.</div>
      <div style='display: flex; justify-content: space-between;'>
         <a href='place.php?id=$id'>
            <div style='font-size: 1.4rem !important; font-weight: bold;'>$placeName</div>
         </a>
         <a href='favfunc.php?id=$id' class='save-btn $class'><i class='fa-regular fa-heart'></i>$saveText</a>
      </div>
      <div style='display: flex; gap: 5px; align-items: center;'>
         <i class='fa-regular fa-location-dot'></i>
         <p style='font-weight: bold;'>$locationName</p>
      </div>
      <p style='font-size: 1.3rem;' class='location-description'>
         $locationDescription
      </p>
      <div style='color: grey;'>
         READ MORE
         <i class='fa-solid fa-caret-down'></i>
      </div>
      <div style='display: flex; gap: 20px;'>
         <div style='display: flex; gap: 5px; align-items: center;padding: 0.1rem 0.5rem; font-size: 0.9rem !important;   color: #858585;'>
            <i class='fa-regular fa-timer'></i>
            <p style='font-size: 0.9rem !important'>$duration</p>
         </div>
         <div style='display: flex; gap: 5px; align-items: center;padding: 0.1rem 0.5rem; font-size: 0.9rem !important;   color: #858585;'>
            <i class='fa-regular fa-timer'></i>
            <p style='font-size: 0.9rem !important'>$people</p>
         </div>
      </div>
   </div>
</div>";
        $i++;
    }

}


?>