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

let footer=`
     <div style="display: grid; gap: 10px;">
            <p>Ready To Travel</p>
            <pre>Follow Us On Other
Platforms
            </pre>
            <div style="display: flex; justify-content: space-between;">
                <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
                <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                <i class="fa-brands fa-twitter" style="color: #ffffff;"></i>
                <i class="fa-brands fa-pinterest-p" style="color: #ffffff;"></i>
            </div>
        </div>
        <div>
            <img src="Images/Logo.png" alt="" height="150px" width="200px">
        </div>
        <div style="display: grid; gap: 20px;">
            <div>About Us</div>
            <div>Contact Us</div>
            <div>Review</div>
            <div>Terms of Use</div>
        </div>
`

document.querySelector('.footer').innerHTML=footer;
document.querySelector('.footer1').innerHTML=footer;



let nav=`
<div class="nav">
        <div>
            <img src="Images/Logo.png" alt="" height="100px" width="150px">
        </div>
        <div class="nav-icon">
            <i class="fa-regular fa-magnifying-glass" ></i>
            <i class="fa-regular fa-bookmark" ></i>
            <div class="hello"></div>
        </div>
    </div>
    <div class="nav-text">
        <div>Home</div>
        <div>Trip Planner</div>
        <div>Booking</div>
        <div>Help</div>
        <div>About Us</div>
    </div>
`

document.querySelector('.nav-bar').innerHTML=nav;
document.querySelector('.nav-bar1').innerHTML=nav;
