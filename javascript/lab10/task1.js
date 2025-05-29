function checkPrime(num) {
    if (num < 2) return false;
    for (let j = 2; j < num; j++) {
        if (num % j === 0) return false;
    }
    return true;
}

function isPrimeNumber(nums) {
    if (Number.isInteger(nums)) {
        console.log(checkPrime(nums) ? "простое" : "не простое");
        return;
    }
    
    if (Array.isArray(nums)) {
        const arrayprime = [];
        const arraynotprime = [];
        
        for (let value of nums) {
            if (checkPrime(value)) {
                arrayprime.push(value);
            } else {
                arraynotprime.push(value);
            }
        }
        
        console.log("простые", arrayprime);
        console.log("непростые", arraynotprime);
        return;
    }
  
    console.log("введи числа");
}


    
    
isPrimeNumber([1,3,4,6,8,7])
