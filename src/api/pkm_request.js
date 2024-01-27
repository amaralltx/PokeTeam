export async function getPkmData(pkm_identifier){
    try {
        const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${pkm_identifier}`);
        if (!response.ok) {
            window.alert(`HTTP error! status: ${response.status}`);
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        const data = await response.json();
        return data

    } catch (error) {
        window.alert(error)
    }
}