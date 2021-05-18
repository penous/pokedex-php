const leftBtn = document.getElementById('left-btn');
const rightBar = document.querySelector('.right-bar');

leftBtn.addEventListener('click', () => {
  rightBar.classList.toggle('slider');
  console.log(rightBar.classList);
});

// const RunTheCode = () => {
//   const input = document.getElementById('input').value;
//   getData(input, (data) => {
//     console.log(data);
//     health.textContent = `${data.stats[0].base_stat} HP`;
//     power.textContent = `${data.stats[1].base_stat} Attack`;
//     type.textContent = `${data.types[0].type.name}`;
//     namee.textContent = `${data.id}•${data.name}`;
//     height.textContent = `HT•${data.height}\"`;
//     weight.textContent = `WT•${data.weight} lbs`;

//     // Getting evolutions
//     chain.innerHTML = '';
//     for (let key in data.chain) {
//       if (key === 'species') {
//         getData(data.chain[key].name, (data) => {
//           chain.appendChild(createImg(data));
//         });
//       } else if (key === 'evolves_to') {
//         for (let key2 in data.chain[key][0]) {
//           if (key2 == 'species') {
//             getData(data.chain[key][0][key2].name, (data) => {
//               chain.appendChild(createImg(data));
//             });
//           } else if (key2 == 'evolves_to') {
//             for (let key3 in data.chain[key][0][key2][0]) {
//               if (key3 == 'species') {
//                 getData(data.chain[key][0][key2][0][key3].name, (data) => {
//                   chain.appendChild(createImg(data));
//                 });
//               }
//             }
//           }
//         }
//       }
//     }
//     // End of evolutions

//     // Getting moves
//     moveTarget.innerHTML = '';
//     let moveCounter = 0;
//     moveCounter = data.moves.length > 8 ? 8 : data.moves.length;
//     console.log(moveCounter);
//     for (let i = 0; i < moveCounter; i++) {
//       const clone = template.content.cloneNode(true);
//       console.log(data.moves[i]);
//       clone.querySelector('.move').textContent = data.moves[i].move.name;
//       moveTarget.appendChild(clone);
//     }

//     sprite.innerHTML = '';
//     sprite.appendChild(createImg(data));
//   });
// };

// run.addEventListener('click', () => {
//   RunTheCode();
// });

// input.addEventListener('keyup', (e) => {
//   console.log(e.key);
//   if (e.key === 'Enter') {
//     RunTheCode();
//   }
// });
