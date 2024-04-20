//adapted from example code 'benskitchen.com'

function clearActive() {
	document.getElementById('cokeBtn').classList.remove('active');
	document.getElementById('spriteBtn').classList.remove('active');
	document.getElementById('pepperBtn').classList.remove('active');
}

function cokeScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
	clearActive();
	document.getElementById('cokeBtn').classList.add('active');
}

function spriteScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
	clearActive();
	document.getElementById('spriteBtn').classList.add('active');
}

function pepperScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
	clearActive();
	document.getElementById('pepperBtn').classList.add('active');
}

var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}

var e = document.getElementById('wire');

function wireFrame()
{
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function defaultFrame()
{
	e.runtime.togglePoints(false);
	e.runtime.togglePoints(false);
}

var lightOn = true;

function headLight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function omniLight()
{
	lightOn = !lightOn;
	document.getElementById('model__omniLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function targetLight()
{
	lightOn = !lightOn;
	document.getElementById('model__targetLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}

function cameraChange() {
	let selectedValue = document.getElementById("cameraSelect").value;
	switch(selectedValue) {
		case 'front': cameraFront(); break;
		case 'back' : cameraBack(); break;
		case 'left': cameraLeft(); break;
		case 'right': cameraRight(); break;
		case 'top': cameraTop(); break;
		case 'bottom': cameraBottom(); break;
	}
}

function renderChange() {
	let selectedValue = document.getElementById("renderOptions").value;
	if(selectedValue === "default") {
		defaultFrame();
	} else {
		wireFrame();
	}
}