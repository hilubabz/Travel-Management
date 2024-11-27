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
        $people = $row['peo
        ple'];
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $seql = "select * from favourites where username='$username'";
            $output = mysqli_query($conn, $seql);
            while ($data = mysqli_fetch_assoc($output)) {
                $tableKoNaam = $data['tableName'];
                $tableKoId = $data['tableId'];
                $sql = "update $tableKoNaam set flag=1 where id=$tableKoId";
                mysqli_query($conn, $sql);
            }
        }
        $flag = $row['flag'];
        echo "
                <div class='places'>
        <div>
            <img src='Images/$placeImage' alt='' height='350px' width='100%'>
        </div>
        <div style='display: grid;'>
            <div style='font-weight: bold;'>$i.</div>
            <div style='display: flex; justify-content: space-between;'>
                <div style='font-size: 2rem; font-weight: bold;'>$placeName</div>
                <form method='POST' action='favfunc.php'>
                <input type='hidden' name='tableId$i' value='$i'>
                <input type='hidden' name='tableName' value='$tableName'>";
                if(isset($_SESSION["username"])) {
        if ($flag == 0) {
            echo "
                <button class='save' style='display: flex; gap: 10px; border: 1px solid grey; align-items: center; padding: 5px; border-radius: 20px; width: 150px; justify-content: center; font-size: 1.5rem; color: grey; height:40px;' type='submit'  name='submit$i'>
                    <i class='fa-regular fa-heart'></i>
                    SAVE

                </button>";
        } else {
            echo "
                    <button class='save' style='display: flex; gap: 10px; border: 1px solid grey; align-items: center; padding: 5px; border-radius: 20px; width: 150px; justify-content: center; font-size: 1.5rem; color: white;background-color:black; height:40px;' type='submit'  name='submit$i'>
                        <i class='fa-regular fa-heart'></i>
                        SAVED
    
                    </button>";
        }}
        else{
            echo "
                    <button class='save' style='display: flex; gap: 10px; border: 1px solid grey; align-items: center; padding: 5px; border-radius: 20px; width: 150px; justify-content: center; font-size: 1.5rem; height:40px;'><a href='favourites.php'>
                        <i class='fa-regular fa-heart'></i>
                        SAVE
                    </a>
                    </button>";
        }
        echo "
                <form>

            </div>
            <div style='display: flex; gap: 5px;'>
                <i class='fa-regular fa-location-dot'></i>
                <p style='font-weight: bold;'>$locationName</p>
            </div>
            <div style='font-size: 1.3rem;'>
                $locationDescription
            </div>
            <div style='color: grey;'>
                READ MORE
                <i class='fa-solid fa-caret-down'></i>
            </div>
            <div style='font-weight: bold;'>Quick Facts</div>
            <div style='display: flex; gap: 20px;'>
                <div style='display: flex; gap: 5px; border: 1px solid black; align-items: center; padding: 10px; border-radius: 20px;'>
                    <i class='fa-regular fa-timer'></i>
                    <p>$duration</p>
                </div>
                <div style='display: flex; gap: 5px; border: 1px solid black; align-items: center; padding: 10px; border-radius: 20px;'>
                    <i class='fa-regular fa-people-group'></i>
                    <p>$people</p>
                </div>
            </div>
        </div>
    </div>
            ";
        $i++;
    }

}


?>