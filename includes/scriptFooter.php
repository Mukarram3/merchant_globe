<script src="js/country-states.js"></script>
    <script data-cfasync="false" src="js/besDXp4bTmLM.js"></script>
    <script src="js/t52JvErvSJ94.js"></script>
    <script src="js/vAY16E4UewUR.js"></script>
    <script src="js/iKOXE31uxxTB.js"></script>
    <script src="js/s71phY6CAxhb.js"></script>
    <script src="js/UUXeowpRr3mz.js"></script>
    <script src="js/R9mAooRKf3tp.js"></script>
    <script src="js/c7f6ofuYF9Uy.js"></script>
    <script src="js/6aaUDfen7Aef.js"></script>
    <script src="js/RvsN0QRLNEdH.js"></script>
    <script src="js/AKpGVR4IceUi.js"></script>
    <script src="js/i7bnWdInkYuY.js"></script>
    <script src="js/MKJcyGGdl1Ie.js"></script>
    <script src="js/ihuHhJkM7Nrm.js"></script>
    <script src="js/85ipie9xHooa.js"></script>
    <script src="js/K8Q0M4vkQEnv.js"></script>
    <script src="js/ywVrIoFKS7nF.js"></script>
    <script src="js/y77fZvrjemnS.js"></script>
    <script src="js/pf33f7JOJb58.js"></script>
    <script src="js/v7JvrV6pvRmY.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <script>
        // user country code for selected option
        let user_country_code = "PK";
        
        (function () {
            // script https://www.html-code-generator.com/html/drop-down/country-region
        
            // Get the country name and state name from the imported script.
            let country_list = country_and_states['country'];
            let states_list = country_and_states['states'];
        
            // creating country name drop-down
            let option =  '';
            option += '<option>select country</option>';
            for(let country_code in country_list){
                // set selected option user country
                let selected = (country_code == user_country_code) ? ' selected' : '';
                option += '<option value="'+country_code+'"'+selected+'>'+country_list[country_code]+'</option>';
            }
            document.getElementById('country').innerHTML = option;
        
            // creating states name drop-down
            let text_box = '<input type="text" class="input-text" id="state">';
            let state_code_id = document.getElementById("state-code");
        
            function create_states_dropdown() {
                // get selected country code
                let country_code = document.getElementById("country").value;
                let states = states_list[country_code];
                // invalid country code or no states add textbox
                if(!states){
                    state_code_id.innerHTML = text_box;
                    return;
                }
                let option = '';
                if (states.length > 0) {
                    option = '<select id="state">\n';
                    for (let i = 0; i < states.length; i++) {
                        option += '<option value="'+states[i].code+'">'+states[i].name+'</option>';
                    }
                    option += '</select>';
                } else {
                    // create input textbox if no states 
                    option = text_box
                }
                state_code_id.innerHTML = option;
            }
        
            // country select change event
            const country_select = document.getElementById("country");
            country_select.addEventListener('change', create_states_dropdown);
        
            create_states_dropdown();
        })();

        $(document).ready(function () {
  $('input[type="radio"]').click(function () {
    if ($(this).attr("id") == "epbtn") {
      $("#easypaisa").show();
    } else {
      $("#easypaisa").hide();
      $("#easypaisa").val('');

    }

    if ($(this).attr("id") == "jcbtn") {
      $("#jazz").show();
    } else {
      $("#jazz").hide();
      $("#jazz").reset();

    }




  });
});
     
        
        </script>