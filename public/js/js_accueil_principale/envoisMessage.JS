let toutLesMessages = document.querySelector('.toutLesMessages');
let zoneText = "";
let tableMessage = [];
let lesLignes = ""
  
document.getElementById('envois_message').addEventListener('click',function(){
    zoneText = document.getElementById('emoji').value;
    if(zoneText.trim() === ""){

    }else{
        let lines = "";
        let lines_ = "";
        zoneText.split('\n').forEach(element => {
            for(let i = 0 ; i < element.length ; i++){
                if(element[i] == " "){
                    lines_ += "&nbsp;";
                }else{
                    lines_ += element[i] ;
                }
            }
            lines +=`<div>${lines_}</div>`;
            lines_ = "";
        });
        tableMessage.push(`<div class="mes_messages">
                            <div class="mes_messages_1">
                                <div class="mes_messages_1_1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><path fill="white" d="M12 2c5.53 0 10 4.47 10 10s-4.47 10-10 10S2 17.53 2 12S6.47 2 12 2m5 5h-2.5l-1-1h-3l-1 1H7v2h10zM9 18h6a1 1 0 0 0 1-1v-7H8v7a1 1 0 0 0 1 1"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.1em" height="1.1em" viewBox="0 0 15 15"><path fill="white" fill-rule="evenodd" d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0m8.146-3.354a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708L6.707 11H4.5a.5.5 0 0 1-.5-.5V8.293z" clip-rule="evenodd"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.1em" height="1.1em" viewBox="0 0 512 512"><path fill="white" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248s248-111.033 248-248S392.967 8 256 8m117.134 346.753c-1.592 1.867-39.776 45.731-109.851 45.731c-84.692 0-144.484-63.26-144.484-145.567c0-81.303 62.004-143.401 143.762-143.401c66.957 0 101.965 37.315 103.422 38.904a12 12 0 0 1 1.238 14.623l-22.38 34.655c-4.049 6.267-12.774 7.351-18.234 2.295c-.233-.214-26.529-23.88-61.88-23.88c-46.116 0-73.916 33.575-73.916 76.082c0 39.602 25.514 79.692 74.277 79.692c38.697 0 65.28-28.338 65.544-28.625c5.132-5.565 14.059-5.033 18.508 1.053l24.547 33.572a12.001 12.001 0 0 1-.553 14.866"/></svg>
                                </div>
                                <div class="mes_messages_1_2 HoriVerCenter">
                                       <div class="stock_message">
                                            ${lines}
                                       </div>
                                       
                                </div>
                                <div class="mes_messages_1_3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.1em" height="1.1em" viewBox="0 0 20 20"><path fill="white" d="m14.83 4.89l1.34.94l-5.81 8.38H9.02L5.78 9.67l1.34-1.25l2.57 2.4z"/></svg>
                                    <svg class="ok_2" xmlns="http://www.w3.org/2000/svg" width="1.1em" height="1.1em" viewBox="0 0 20 20"><path fill="white" d="m14.83 4.89l1.34.94l-5.81 8.38H9.02L5.78 9.67l1.34-1.25l2.57 2.4z"/></svg>
                                </div>
                            </div>
                            <div class="mes_messages_2 HoriVerCenter">
                                <div class="trait">
                                    01:02
                                </div>
                            </div>
                        </div><br>
                       `);
           for(let i = tableMessage.length - 1 ; i >= 0 ; i--){
               lesLignes += tableMessage[i];
           }           
           toutLesMessages.innerHTML = lesLignes ; 
           lesLignes = "" ;
           document.getElementById('emoji').value = "";
           document.querySelector('.emojionearea-editor').textContent = "";
           let maDiv = document.getElementById("voirEnvoyerMessageRemplis_main1");

           var style = window.getComputedStyle(maDiv);
           var backgroundColor = style.backgroundColor;
           let mes_messages_1_2 = document.querySelectorAll(".mes_messages_1_2");
           let ses_messages_2_2 = document.querySelectorAll(".ses_messages_2_2");
            mes_messages_1_2.forEach(element => {
            element.style.backgroundColor = backgroundColor
            });
            ses_messages_2_2.forEach(element => {
                element.style.backgroundColor = backgroundColor
            });
                  
    }
    
})
