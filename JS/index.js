let locationString=''
let image=['abc.jpeg','grandmosque.jpg','grandcanyon.jpg','abc.jpeg']
let loc=['Annapurna Base Camp','Grand Mosque','Grand Canyon','Petronas Twin Tower']
let duration=['11 Days','9 hours','9-14 hours','8 hours']
let price=['$120-$150','$195-$215','$110-$150','$220=$350']

for(let i=0;i<4;i++){
    locationString+=
    `
        <div class="location">
            <div align="center">
                <img src="Images/${image[i]}" alt="" height="250px" width="450px">
            </div>
            <div style="display: grid; gap: 5px; font-weight: 1000;">
                <div align="center">${loc[i]}</div>
                <div align="center">Duration: ${duration[i]}</div>
                <div align="center">${price[i]}</div>
            </div>
        </div>
    
    `
}

document.querySelector('.top-picks').innerHTML=locationString

let preferenceString=''
prefimg=['attraction.jpg','cultural.jpg','bucketlist.jpg']
preftext=['Top Attractions','Cultural & Historical','Bucket List']

for(let i=0;i<3;i++){
    preferenceString+=
    `
        <div>
            <div>
                <img src="Images/${prefimg[i]}" alt="" height="300px" width="350px">
            </div>
            <div style="font-size: 1.3rem; font-weight: 1000;" align="center">${preftext[i]}</div>
            </div>
    `
}

document.querySelector('.traveling').innerHTML=preferenceString;

