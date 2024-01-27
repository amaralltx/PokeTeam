import { poke_team } from "./index.mjs";

const $pkm_list = document.querySelector("#team_card").children;

for (let index = 0; index < $pkm_list.length; index++) {
    
    $pkm_list[index].addEventListener('mouseover', () => {
        if (poke_team[index] != null){
            $pkm_list[index].firstElementChild.classList.add("card-hover");
            $pkm_list[index].firstElementChild.style.transform = 'scale(1.05)';
        }
    });
    $pkm_list[index].addEventListener('mouseout', () => {
        if (poke_team[index] != null){
            $pkm_list[index].firstElementChild.classList.remove("card-hover");
            $pkm_list[index].firstElementChild.style.transform = 'scale(1.00)';
        }
    })

    $pkm_list[index].addEventListener('click', () => {
        removePkm($pkm_list[index], index+1);
        poke_team[index] = null;
        poke_team.pop();
    })
    
}

function removePkm($pkm_card, card_index) {

    $pkm_card.firstElementChild.style.setProperty("-webkit-filter", "drop-shadow(0px 0px 0px transparent)");
    $pkm_card.firstElementChild.style.transform = 'scale(1.00)';

    // Sprite do pokémon e cores de fundo
    const $pkm_sprite = document.querySelector(`#pkm-img-${card_index}`);
    $pkm_sprite.src = "assets/images/pokeball-bg.svg"
    $pkm_sprite.style.opacity = '0'

    // Background
    const $pkm_card_bg = $pkm_sprite.parentElement
    $pkm_card_bg.classList.remove("card-hover");
    $pkm_card_bg.style.backgroundImage = `url(../../assets/images/pokeball-bg.svg)`;

    // // Caixa de detalhes
    const $pkm_details = document.querySelector(`#pkm-details-${card_index}`);
    $pkm_details.style.backgroundImage = `none`

    // Ícone do tipo esquerda
    const $pkm_img_type1 =  document.querySelector(`#pkm-details-${card_index}-left-type`);
    $pkm_img_type1.src = `assets/type_icons/normal.svg`;
    $pkm_img_type1.style.opacity = '0';
    $pkm_img_type1.style.backgroundColor = `transparent`

    // Íconne do tipo direita
    const $pkm_img_type2 =  document.querySelector(`#pkm-details-${card_index}-right-type`);
    $pkm_img_type2.src = `assets/type_icons/normal.svg`;
    $pkm_img_type2.style.opacity = '0';
    $pkm_img_type2.style.backgroundColor = `transparent}`

    // Nome do pokémon
    const $pkm_name = document.querySelector(`#pkm-details-name-${card_index}`);
    $pkm_name.innerHTML = "";

    // Número da pokedex
    const $pkm_number =  document.querySelector(`#pkm-details-number-${card_index}`);
    $pkm_number.innerHTML = "";
}
