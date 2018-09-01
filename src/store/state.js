// state中放全局公用的数据
let defaultCity = '上海';
try {
  if (localStorage.city) {
    defaultCity = localStorage.city;
  }
} catch (error) {}

export default {
  city: defaultCity
};