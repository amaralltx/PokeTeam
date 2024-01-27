import { typeColors } from "./components/pkm_types.js";
import { getPkmData } from "./api/pkm_request.js";

export let poke_team = []

const $pkm_identifier_input = document.getElementById("pkm-identifier");

$pkm_identifier_input.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const empty_slot_index = getEmptySlot()

        if (empty_slot_index == null){
            window.alert("No slots available");
            return;
        }
        
        // String com o input do usuário
        let pkm_id = $pkm_identifier_input.value.toLowerCase();
        pkm_id = pkm_id.replace(/^0+/, "");

        getPkmData(pkm_id).then(data => {
            poke_team[empty_slot_index] = data;
            updateComponent(data, empty_slot_index+1);
        }).catch(error => {
            console.error(error); // Exibe erros no console
        });

         
    }
});


// Atualiza o componente com a inserção dos dados do pokémon 
function updateComponent(pkm_data, card_index){

    const pkm_name = pkm_data.name;
    const pkm_id = pkm_data.id;
    const pkm_type1 = pkm_data.types[0].type.name
    let pkm_type2
    
    if (pkm_data.types[1]) {
        pkm_type2 = pkm_data.types[1].type.name
    }else {
        pkm_type2 = pkm_type1;
    } 
    console.log(card_index)
    // Sprite do pokémon e cores de fundo
    const $pkm_sprite = document.querySelector(`#pkm-img-${card_index}`);
    $pkm_sprite.src = pkm_data.sprites.other["official-artwork"].front_default
    $pkm_sprite.style.opacity = '1'

    // Background
    const $pkm_card_bg = $pkm_sprite.parentElement
    $pkm_card_bg.style.borderRadius = "50";
    $pkm_card_bg.style.backgroundImage = `url(../../assets/images/pokeball-bg.svg), linear-gradient(90deg, ${typeColors[pkm_type1]}, ${typeColors[pkm_type2]})`;
    $pkm_card_bg.style.setProperty("-webkit-filter", `drop-shadow(0px 0px 15px ${typeColors[pkm_type1]})`);

    // // Caixa de detalhes
    const $pkm_details = document.querySelector(`#pkm-details-${card_index}`);
    $pkm_details.style.backgroundImage = `linear-gradient(45deg, ${typeColors[pkm_type1]}, ${typeColors[pkm_type2]})`

    // Ícone do tipo esquerda
    const $pkm_img_type1 =  document.querySelector(`#pkm-details-${card_index}-left-type`);
    $pkm_img_type1.src = `assets/type_icons/${pkm_type1}.svg`
    $pkm_img_type1.style.opacity = '1';
    $pkm_img_type1.style.backgroundColor = `${pkm_type1}`

    // Íconne do tipo direita
    const $pkm_img_type2 =  document.querySelector(`#pkm-details-${card_index}-right-type`);
    $pkm_img_type2.src = `assets/type_icons/${pkm_type2}.svg`
    $pkm_img_type2.style.opacity = '1';
    $pkm_img_type2.style.backgroundColor = `${pkm_type2}`

    // Nome do pokémon
    const $pkm_name = document.querySelector(`#pkm-details-name-${card_index}`);
    $pkm_name.innerHTML = pkm_name;

    // Número da pokedex
    const $pkm_number =  document.querySelector(`#pkm-details-number-${card_index}`);
    $pkm_number.innerHTML = `N° ${pkm_id}`;

}

function getEmptySlot(){
    for (let index = 0; index < 6; index++) {
        if (poke_team[index] == null){
            return index
        }
        
    }

    return null;
}

function getEmptyCard(){
    const $pkm_list = document.querySelector("#team_card").children;

    for (let index = 0; index < $pkm_list.length; index++) {
        if($pkm_list[index].getAttribute('data-filled') == "false"){
            $pkm_list[index].setAttribute('data-filled', "true");
            return index+1;
        }
    }

    window.alert("No more slots");
    
    return false;
}


