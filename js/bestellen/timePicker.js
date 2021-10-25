console.log(moment().format("YYYY/MM/D"))


function makeTimeTable() {
	const timeNow = moment().format("HHmm")
	console.log(timeNow)
	if(timeNow >=  1200) {
		console.log("boven 12:00")
		let currentDate = moment().format(`YYYY-MM-DD`)
		let startTime = moment().format("HH")
		let startDate = `${currentDate} ${startTime}`
		for(i=0;i<10;i++){
			let next = moment(startDate).add(30, 'minutes').format('HH:mm')
			startDate = moment(startDate).add(30, 'minutes').format('YYYY-MM-DD HH:mm')
			$(".time").append(`
				<option >${next}</option>   	
			`)
		}
	} else {
		let currentDate = moment().format(`YYYY-MM-DD`)
		let startTime = "12:00"
		let startDate = `${currentDate} ${startTime}`
		for(i=0;i<10;i++){
			let next = moment(startDate).add(30, 'minutes').format('HH:mm')
			startDate = moment(startDate).add(30, 'minutes').format('YYYY-MM-DD HH:mm')
			$(".time").append(`
				<option >${next}</option>   	
			`)
		}
	}
}
