function uniqueElements(array){
    const obj = {}
    for (let value of array) {
        const key = String(value)
        if (obj[key]){
            obj[key]++
        }
        else { 
            obj[key] = 1
        }
    }
    console.log(obj)  
}

uniqueElements(["привет", "2", "пока", "2", true, false, true]) //зачем мы переводими в строку