const users = [
    { id: 1, name: "Alice" },
    { id: 2, name: "Bob" },
    { id: 3, name: "Charlie" }
  ];
const newArray = users.map((user) => {return user.name}) 
console.log(newArray) 