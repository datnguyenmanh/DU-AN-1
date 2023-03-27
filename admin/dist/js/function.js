const data = [
  {
    id: 1,
    name: "150",
    order: 'New Orders',
    icon: '<i class="ion ion-bag"></i>',
    more: 'More info',
    back: "bg-info"
  },
  {
    id: 2,
    name: "53",
    order: 'Bounce Rate',
    icon: '<i class="ion ion-stats-bars"></i>',
    more: 'More info',
    back: "bg-info",
    back: "bg-success"
  },
  {
    id: 3,
    name: "44",
    order: 'Unique Visitors',
    icon: '<i class="ion ion-pie-graph"></i>',
    more: 'More info',
    back: "bg-warning"
  },
  {
    id: 4,
    name: "150",
    order: 'More info',
    icon: '<i class="ion ion-person-add"></i>',
    more: 'More info',
    back: "bg-danger"
  },
];


const content = document.querySelector('.dât_content');
const read = () => {
  data.map((item, index) => content.innerHTML += `
  <div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box ${item.back}">
    <div class="inner">
      <h3>${item.name}</h3>

      <p>${item.order}</p>
    </div>
    <div class="icon">
      ${item.icon}
    </div>
    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
  `)
}
read();


const modal = document.querySelector('.modal_content');
const add = document.querySelector('.btn_add');
add.addEventListener('click', () => {
  modal.classList.toggle('d-block');
})
