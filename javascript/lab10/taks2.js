function countVowels(str){
    const vowelsstring = "аиоеуэюяёАИОЕУЭЮЯЁ"
    let counter = 0
    const vowels = []
    for (let value of str) {
        if (vowelsstring.includes(value)) {
            vowels.push(value)
            counter++
        }
    }
    console.log(counter, vowels)
}

countVowels("Друзья, это жизнь")
