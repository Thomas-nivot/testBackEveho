const array = [30, 15, 5, 20, -20, -1, 10, -5, 3, 2];
let result = null;

for (const value of array) {
  if (result === null || Math.abs(value) <= Math.abs(result)) {
    result = value;
  }
}

console.log(array.lenth === 0 ? "0" : result);
