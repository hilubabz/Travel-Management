let places= ''

let placeImage=['empirestatebuilding.jpg','eiffel.jpg','annefrank.jpg','basilica.jpg','coliseum.jpg']

let placeName=['EMPIRE STATE BUILDING','EIFFEL TOWER','ANNE FRANK HOUSE','BASILICA de la SAGRADA FAMILIA','COLOSSEUM']

let locationName=['New York, USA','Paris, France','Amsterdam, Netherlands','Barcelona, Spain','Rome, Italy']

let locationDescription=["The Empire State Building is arguably the most iconic building in New York City. Visitors can expect two observation decks, with sweeping skyline views. Other than a classic photo-op, you can learn about the building's history through informative displays and videos, then have a meal at one of the seven on-site restaurants.","The Eiffel Tower has stunning panoramas of Paris. Book a ticket in advance to climb the steps—or better yet, take the elevator—to the three platforms. You'll learn about the monument's historic and architectural background. Don't miss snapping a picture at the top of the twinkling tower at night or reserving a table at the on-site restaurant.","At the Anne Frank House, you'll learn how the Nazi occupation impacted Jewish families in Amsterdam during WWII. Immersive, educational exhibits bring history to life, with videos and artifacts on display. The audio tour follows in Anne's footsteps through the secret rooms where she lived in hiding. Tip: Tickets sell out quickly, so book them weeks in advance.","If there's one landmark you must visit in Barcelona, it's Gaudí's architectural masterpiece, La Sagrada Familia. Take a guided tour to learn about the detailed façade, stained glass windows, and impressive artwork inside. You'll also hear about the history and craftsmanship it took to build the basilica. Tip: Check out the farmers' market and souvenir shops nearby.","The Colosseum is iconic for a reason. Although you can explore the Roman arena on your own time, it's best to book a guided tour to hear about the history, architecture, and gladiator games in more detail. Tip: It's even better at night, when the landmark is lit up and there are fewer crowds."]



for(let i=0;i<5;i++){
places+=`
    <div class="places">
        <div>
            <img src="Images/${placeImage[i]}" alt="" height="350px" width="100%">
        </div>
        <div style="display: grid;">
            <div style="font-weight: bold;">${i+1}.</div>
            <div style="display: flex; justify-content: space-between;">
                <div style="font-size: 2rem; font-weight: bold;">${placeName[i]}</div>
                <div style="display: flex; gap: 10px; border: 1px solid grey; align-items: center; padding: 5px; border-radius: 20px; width: 150px; justify-content: center; font-size: 1.5rem; color: grey; height:40px">
                    <i class="fa-regular fa-heart"></i>
                    <p>SAVE</p>

                </div>
            </div>
            <div style="display: flex; gap: 5px;">
                <i class="fa-regular fa-location-dot"></i>
                <p style="font-weight: bold;">${locationName[i]}</p>
            </div>
            <div style="font-size: 1.3rem;">
                ${locationDescription[i]}
            </div>
            <div style="color: grey;">
                READ MORE
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
    </div>
`
}
document.querySelector('.place-list').innerHTML=places;