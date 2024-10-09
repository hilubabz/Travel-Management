let places= ''

let placeImage=['scuba.jpg','ballon.jpg','skydive.jpg','dune.jpg','bungee.jpg']

let placeName=['BEGINNER SCUBA DIVING EXPERIENCE IN HONOLULU','CAPPADOCIA BALLOON RIDE & CHAMPAGNE BREAKFAST','SKYDIVE TANDEM - SAO PAULO - BRAZIL','EXTREME RED DUNE BUGGY DESERT SAFARI ADVENTURE','KUSHMA BUNGEE - WORLD’S SECOND HIGHEST BUNGEE JUMP ']

let locationName=['Oahu, Hawaii','Goreme, Turkery','Sao Paulo, Brazil','Dubai, United Arab Emirates','Kushma, Nepal']

let locationDescription=["Explore Honolulu’s underwater world on a beginner scuba diving adventure. With attentive instructors, you'll learn the ropes in a safe and comfortable environment. Swim alongside sea turtles, check out the colorful coral, and spot diverse marine life. ","Soar over the stunning landscapes of Cappadocia during a Balloon Ride and Champagne Breakfast. Gently float above fairy chimneys and unique rock formations while enjoying a smooth, safe ride in a spacious basket. The intimate group size, ","Take to the skies with Skydive Tandem - São Paulo - Brazil, where you'll be in good hands with their friendly, professional staff and high standard instructors. As you freefall above the breathtaking landscape, feel the adrenaline rush and create a ","On the Extreme Red Dune Buggy Desert Safari Adventure, you’ll take an adrenaline-filled adventure in Dubai’s stunning desert. Go sandboarding, explore the dunes in a buggy (but hold on tight), and take an unforgettable camel ride. Top it off with ","Kushma Bungee, located in Kushma, Nepal, is the second highest bungee jump in the world, offering an exhilarating experience for adventure enthusiasts. With a jump height of around 228 meters (748 feet) from the suspension bridge over the Kali "]

let duration=['Duration: 1 hour 30 minutes','Duration: 3 hours 30 minutes','Duration: 3 hours ','Duration: 120-240 minutes','Duration: 1 hour 45 minutes']

let people=['Ages 10-99','Ages 6-99','Ages 14-80','Ages 0-99','Ages 0-90, max of 15 per group']

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
            <div style="font-weight: bold;">Quick Facts</div>
            <div style="display: flex; gap: 20px;">
                <div style="display: flex; gap: 5px; border: 1px solid black; align-items: center; padding: 10px; border-radius: 20px;">
                    <i class="fa-regular fa-timer"></i>
                    <p>${duration[i]}</p>
                </div>
                <div style="display: flex; gap: 5px; border: 1px solid black; align-items: center; padding: 10px; border-radius: 20px;">
                    <i class="fa-regular fa-people-group"></i>
                    <p>${people[i]}</p>
                </div>
            </div>
        </div>
    </div>
`
}
document.querySelector('.place-list').innerHTML=places;