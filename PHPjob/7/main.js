//問1
let numbers = [2, 5, 12, 13, 15, 18, 22];

let num = numbers.filter(x => x % 2 === 0);

console.log(num);

function isEven(){
    console.log(num + 'は偶数です');   
    }




//問2
class car {
    constructor(gass,num){
        this.gass = gass;
        this.num = num;
    }
    getNumGas(){
        console.log(`ガソリンは${this.gass}です。ナンバーは${this.num}です。`);     
    }
}

let yamada = new car(20,1234);
yamada.getNumGas();


