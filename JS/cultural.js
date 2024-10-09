let places= ''

let placeImage=['ktmdurbar.jpg','grandmosque.jpg','pub.jpg','bhaktapurdurbar.jpg','florence.jpg']

let placeName=['HISTORY OF KATHMANDU DURBAR SQUARE','GRAND MOSQUE, ROYAL PALACE & ETIHAD TOWERS','HISTORICAL PUB WALKING TOUR OF LONDON','HISTORY OF BHAKTAPUR DURBAR SQUARE','THE DARK SIDE OF FLORENCE - MYSTERIES AND LEGENDS']

let locationName=['Kathmandu, Nepal','Dubai, United Arab Emirate','London, England','Bhaktapur, Nepal','Florence, Italy']

let locationDescription=['Kathmandu Durbar Square, located in the heart of Kathmandu, Nepal, is a historic and cultural hub that once served as the royal palace for the Malla kings. This UNESCO World Heritage Site is a stunning collection of palaces, courtyards, and temples, ',"On this journey from Dubai to Abu Dhabi, you'll be treated to captivating insights and informative commentary as you visit the Grand Mosque, Royal Palace, and Etihad Towers. With well-planned stops and plenty of photo opportunities, you'll enjoy a On this journey from Dubai to Abu Dhabi, you'll be treated to captivating insights and informative commentary as you visit the Grand Mosque, Royal Palace, and Etihad Towers. With well-planned stops and plenty of photo opportunities, you'll enjoy a ","On the Small-Group Tour: Historical Pub Walking Tour of London, you'll stroll through the city while learning interesting facts from a knowledgeable guide. Explore off-the-beaten-path local pubs, admire historical and architectural highlights, and enjoy a fun ","Bhaktapur Durbar Square, located in Bhaktapur, Nepal, is a magnificent example of traditional Newari architecture and one of the best-preserved historical sites in the Kathmandu Valley. This UNESCO World Heritage Site features an array of ancient Bhaktapur Durbar Square, located in Bhaktapur, Nepal, is a magnificent example of traditional Newari architecture and one of the best-preserved historical sites in the Kathmandu Valley. This UNESCO World Heritage Site features an array of ancient ","Explore the dark side of Florence - Mysteries and Legends on this unique, short and sweet journey. With enthusiastic guides, you'll hear a good blend of historical facts, local legends, and ghost stories while visiting spectacular locations at night. Engaging "]

let duration=['Duration: 120-240 minutes','Duration: 9 hours','Duration: 3 hours 30 minutes','Duration: 120-240 minutes','Duration: 1 hour 45 minutes']

let people=['Ages 0-99','Ages 3-80, max of 15 per group','Ages 18-99, max of 14 per group','Ages 0-99','Ages 0-90, max of 15 per group']

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