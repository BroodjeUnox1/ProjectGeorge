console.log(moment().format("YYYY/MM/D"))



let currentDate = moment().format(`YYYY-MM-DD`)
let startTime = "12:00"
let startDate = `${currentDate} ${startTime}`

function makeTimeTable() {
	for(i=0;i<10;i++){
	let next = moment(startDate).add(30, 'minutes').format('HH:mm')
	startDate = moment(startDate).add(30, 'minutes').format('YYYY-MM-DD HH:mm')
	$(".time").append(`
		<option >${next}</option>   	
	`)
	}
}
