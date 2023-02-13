Tone.start()

note_list=[[],[],[],[],[],[],[],[],[],[],[],[],]
trigger=[[],[],[],[],[],[],[],[],[],[],[],[],]


var ref = { 
    0: 'B',
    1: 'A',
    2: 'G',
    3: 'F',
    4: 'E',
    5: 'D',
    6: 'C',
  };
  /*
function tableCreate() { 
    tbl = document.createElement('table');

  
    for (let i = 0; i < 7; i++) {
      const tr = tbl.insertRow();
      for (let j = 1; j < 13; j++) {
        if (i === 7 && j === 1) {
          
			break;
        } else {
            var btn = document.createElement('BUTTON').onclick(this.id);
            btn.id = (ref[i] + j);
            btn.style.backgroundColor = "gray";
            const td = tr.insertCell();
            td.appendChild(btn); 
        }
      }
    }
    body.appendChild(tbl);
  }
  
  tableCreate();
*/
function cursor(id_data)
{
	color_data = document.getElementById(id_data).style.backgroundColor;
	number_data = id_data.slice(1,3)
	note_data = id_data.slice(0,1)
	if (color_data == "gray")
	{
		document.getElementById(id_data).style.backgroundColor = "black";
		
		
		
		console.log(id_data, number_data);
		
		const synth = new Tone.Synth().toDestination()
		synth.triggerAttackRelease(note_data + "4", "8n");
		for (let i = 0; i < note_list.length; i++)
		{
			if(i == number_data)
				note_list[i].push(note_data + "4");
		}
		console.log(note_list)
		
	}
	if (color_data == "black")
	{
		document.getElementById(id_data).style.backgroundColor = "gray";
		console.log(id_data, number_data);	
		for (let i = 0; i < note_list.length; i++)
		{
			if(i == number_data)
				note_list[i].shift(note_data);
		}
		console.log(note_list)
	}
	console.log(id_data, number_data, color_data);
}
function play()
{
	var play_data;
	const synth = new Tone.Synth().toDestination();
	for(let i; i < 7; i++){
		for(let x; x < note_list[i].length; x++){
			play_data = note_list[i][x];
			synth.triggerAttackRelease(play_data + "4", "8n");
			console.log(play_data)
		}	
	}
}
function convert_base64()
{
	const track = new MidiWriter.Track();
	track.addEvent(new MidiWriter.ProgramChangeEvent({instrument: 1}));
	var note_play = [];
	/*
	for(let i; i < note_list.length; i++){
		note_play = [];
		for(let x; x < note_list[i].length; x++){
			
		}
		const note = new MidiWriter.NoteEvent({pitch: note_play, duration: '4'});
		track.addEvent(note);
	}
	*/
		track.addEvent([
			new MidiWriter.NoteEvent({pitch: note_list[1], duration: '1'}),
			new MidiWriter.NoteEvent({pitch: note_list[2], duration: '1'}),
			new MidiWriter.NoteEvent({pitch: note_list[3], duration: '1'}),
			new MidiWriter.NoteEvent({pitch: note_list[4], duration: '1'}),
			new MidiWriter.NoteEvent({pitch: note_list[5], duration: '1'}),
			new MidiWriter.NoteEvent({pitch: note_list[6], duration: '1'}),
			new MidiWriter.NoteEvent({pitch: note_list[7], duration: '1'}),
			new MidiWriter.NoteEvent({pitch: note_list[8], duration: '1'}),
			new MidiWriter.NoteEvent({pitch: note_list[9], duration: '1'}),
			new MidiWriter.NoteEvent({pitch: note_list[10], duration: '1'}),
			new MidiWriter.NoteEvent({pitch: note_list[11], duration: '1'}),
			new MidiWriter.NoteEvent({pitch: note_list[12], duration: '1'}),
		], function(event, index) {
		return {sequential: true};
	}
	);
	const write = new MidiWriter.Writer(track);
	console.log(write.dataUri());
	readyData = write.dataUri();
	console.log(readyData)
	document.getElementById("dane").value = readyData;
}