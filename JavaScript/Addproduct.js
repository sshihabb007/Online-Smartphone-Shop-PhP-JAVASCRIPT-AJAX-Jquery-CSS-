function image()
{
	var filedata =document.product.File;
	var filepath=filedata.value;
	var type =null;
	var image=document.getElementById('im');
	if(filepath=='')
		{
			image.src=null;
			alert("Please upload an image");
			return false;
		}
	else
		{
			type=filepath.substring(filepath.lastIndexOf('.')+1).toLowerCase();
		}
	if (type=="jpg" || type=="jpeg" || type=="gif" || type=="png") {
		return true;
	}
	else
		{
			image.src=null;
			alert("Photo only allows file types of GIF, PNG, JPG, and JPEG. ");
			return false;
		}

}
function showimg(e)
{
	if(image())
		{
			if(e.files && e.files[0])
				{
					var obj =new FileReader();
					obj.onload = function(data){
						var image=document.getElementById('im');
						image.src=data.target.result;
					}
					obj.readAsDataURL(e.files[0]);
				}
		}
}
function model()
{
	var i =document.product.Model.value.length;
	if(i>=2)
	{
		document.getElementById("Model").style = "visibility: hidden";
		document.product.Model.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Model").style = "visibility: visible";
		document.product.Model.style="background-color: #ff6666";
		return false;
	}
}
function multitouch()
{
	var i =document.product.MultiTouch.value.length;
	if(i>=2)
	{
		document.getElementById("MultiTouch").style = "visibility: hidden";
		document.product.MultiTouch.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("MultiTouch").style = "visibility: visible";
		document.product.MultiTouch.style="background-color: #ff6666";
		return false;
	}
}
function brand()
{
	var i =document.product.Brand.value.length;
	if(i!=0)
	{
		document.getElementById("Brand").style = "visibility: hidden";
		document.product.Brand.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Brand").style = "visibility: visible";
		document.product.Brand.style="background-color: #ff6666";
		return false;
	}
}
function dimensions()
{
	var i =document.product.Dimensions.value.length;
	if(i>=2)
	{
		document.getElementById("Dimensions").style = "visibility: hidden";
		document.product.Dimensions.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Dimensions").style = "visibility: visible";
		document.product.Dimensions.style="background-color: #ff6666";
		return false;
	}
}
function weight()
{
	var i =document.product.Weight.value.length;
	if(i>=2)
	{
		document.getElementById("Weight").style = "visibility: hidden";
		document.product.Weight.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Weight").style = "visibility: visible";
		document.product.Weight.style="background-color: #ff6666";
		return false;
	}
}
function bodybuild()
{
	var i =document.product.BodyBuild.value.length;
	if(i>=2)
	{
		document.getElementById("BodyBuild").style = "visibility: hidden";
		document.product.BodyBuild.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("BodyBuild").style = "visibility: visible";
		document.product.BodyBuild.style="background-color: #ff6666";
		return false;
	}
}
function sim()
{
	var i =document.product.Sim.value.length;
	if(i>=2)
	{
		document.getElementById("Sim").style = "visibility: hidden";
		document.product.Sim.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Sim").style = "visibility: visible";
		document.product.Sim.style="background-color: #ff6666";
		return false;
	}
}
function technoogy()
{
	var i =document.product.Technoogy.value.length;
	if(i>=2)
	{
		document.getElementById("Technoogy").style = "visibility: hidden";
		document.product.Technoogy.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Technoogy").style = "visibility: visible";
		document.product.Technoogy.style="background-color: #ff6666";
		return false;
	}
}
function displaytype()
{
	var i =document.product.Displaytype.value.length;
	if(i>=2)
	{
		document.getElementById("Displaytype").style = "visibility: hidden";
		document.product.Displaytype.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Displaytype").style = "visibility: visible";
		document.product.Displaytype.style="background-color: #ff6666";
		return false;
	}
}
function displaysize()
{
	var i =document.product.Displaysize.value.length;
	if(i>=2)
	{
		document.getElementById("Displaysize").style = "visibility: hidden";
		document.product.Displaysize.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Displaysize").style = "visibility: visible";
		document.product.Displaysize.style="background-color: #ff6666";
		return false;
	}
}
function displayproctector()
{
	var i =document.product.Displayproctector.value.length;
	if(i>=2)
	{
		document.getElementById("Displayproctector").style = "visibility: hidden";
		document.product.Displayproctector.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Displayproctector").style = "visibility: visible";
		document.product.Displayproctector.style="background-color: #ff6666";
		return false;
	}
}
function os()
{
	var i =document.product.OS.value.length;
	if(i>=2)
	{
		document.getElementById("OS").style = "visibility: hidden";
		document.product.OS.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("OS").style = "visibility: visible";
		document.product.OS.style="background-color: #ff6666";
		return false;
	}
}
function chipset()
{
	var i =document.product.Chipset.value.length;
	if(i>=2)
	{
		document.getElementById("Chipset").style = "visibility: hidden";
		document.product.Chipset.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Chipset").style = "visibility: visible";
		document.product.Chipset.style="background-color: #ff6666";
		return false;
	}
}
function cpu()
{
	var i =document.product.CPU.value.length;
	if(i>=2)
	{
		document.getElementById("CPU").style = "visibility: hidden";
		document.product.CPU.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("CPU").style = "visibility: visible";
		document.product.CPU.style="background-color: #ff6666";
		return false;
	}
}
function gpu()
{
	var i =document.product.GPU.value.length;
	if(i>=2)
	{
		document.getElementById("GPU").style = "visibility: hidden";
		document.product.GPU.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("GPU").style = "visibility: visible";
		document.product.GPU.style="background-color: #ff6666";
		return false;
	}
}
function cardslort()
{
	var i =document.product.Cardslort.value.length;
	if(i>=2)
	{
		document.getElementById("Cardslort").style = "visibility: hidden";
		document.product.Cardslort.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Cardslort").style = "visibility: visible";
		document.product.Cardslort.style="background-color: #ff6666";
		return false;
	}
}
function internalmemory()
{
	var i =document.product.InternalMemory.value.length;
	if(i>=2)
	{
		document.getElementById("InternalMemory").style = "visibility: hidden";
		document.product.InternalMemory.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("InternalMemory").style = "visibility: visible";
		document.product.InternalMemory.style="background-color: #ff6666";
		return false;
	}
}
function primerycamera()
{
	var i =document.product.Primerycamera.value.length;
	if(i>=2)
	{
		document.getElementById("Primerycamera").style = "visibility: hidden";
		document.product.Primerycamera.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Primerycamera").style = "visibility: visible";
		document.product.Primerycamera.style="background-color: #ff6666";
		return false;
	}
}
function camerafeature()
{
	var i =document.product.CameraFeature.value.length;
	if(i>=2)
	{
		document.getElementById("CameraFeature").style = "visibility: hidden";
		document.product.CameraFeature.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("CameraFeature").style = "visibility: visible";
		document.product.CameraFeature.style="background-color: #ff6666";
		return false;
	}
}
function video()
{
	var i =document.product.Video.value.length;
	if(i>=2)
	{
		document.getElementById("Video").style = "visibility: hidden";
		document.product.Video.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Video").style = "visibility: visible";
		document.product.Video.style="background-color: #ff6666";
		return false;
	}
}
function secondarycamera()
{
	var i =document.product.SecondaryCamera.value.length;
	if(i>=2)
	{
		document.getElementById("SecondaryCamera").style = "visibility: hidden";
		document.product.SecondaryCamera.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("SecondaryCamera").style = "visibility: visible";
		document.product.SecondaryCamera.style="background-color: #ff6666";
		return false;
	}
}
function alerttype()
{
	var i =document.product.AlertType.value.length;
	if(i>=2)
	{
		document.getElementById("AlertType").style = "visibility: hidden";
		document.product.AlertType.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("AlertType").style = "visibility: visible";
		document.product.AlertType.style="background-color: #ff6666";
		return false;
	}
}
function loudspeaker()
{
	var i =document.product.Loudspeaker.value.length;
	if(i>=2)
	{
		document.getElementById("Loudspeaker").style = "visibility: hidden";
		document.product.Loudspeaker.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("Loudspeaker").style = "visibility: visible";
		document.product.Loudspeaker.style="background-color: #ff6666";
		return false;
	}
}

function quantity()
{
	var i =document.product.Quantity.value.length;
	if(i>=2)
	{
		if(Number.isInteger(parseInt(document.product.Quantity.value)) && Math.sign(document.product.Quantity.value) == 1)
		{
			
			document.getElementById("Quantity").style = "visibility: hidden";
			document.product.Quantity.style="background-color: white";
			return true;
		
		
		}
		else
			{
				document.getElementById("Quantity").innerHTML = "(invalid)";
				document.getElementById("Quantity").style = "visibility: visible";
				document.product.Quantity.style="background-color: #ff6666";
				return false;
			}
		
	}
	else
	{
		document.getElementById("Quantity").innerHTML = "(Min: 2)";
		document.getElementById("Quantity").style = "visibility: visible";
		document.product.Quantity.style="background-color: #ff6666";
		return false;
	}
}
function price()
{
	var i =document.product.Price.value.length;
	if(i>=2)
	{
		if(Number.isInteger(parseInt(document.product.Price.value)) && Math.sign(document.product.Price.value) == 1)
		{
		
			document.getElementById("Price").style = "visibility: hidden";
			document.product.Price.style="background-color: white";
			return true;
		}
		else
			{
				document.getElementById("Price").innerHTML = "(invalid)";
				document.getElementById("Price").style = "visibility: visible";
				document.product.Price.style="background-color: #ff6666";
				return false;
			}
		
	}
	else
	{
		document.getElementById("Price").innerHTML = "(Min: 2)";
		document.getElementById("Price").style = "visibility: visible";
		document.product.Price.style="background-color: #ff6666";
		return false;
	}
}
function Add()
{
	if(!image())
	{
		document.product.File.focus();
		return false;
	}
	else if(!model())
	{
		document.product.Model.focus();
		return false;
	}
	else if(!brand())
	{
		document.product.Brand.focus();
		return false;
	}
	else if(!multitouch())
	{
		document.product.MultiTouch.focus();
		return false;
	}
	else if(!dimensions())
	{
		document.product.Dimensions.focus();
		return false;
	}
	else if(!weight())
	{
		document.product.Weight.focus();
		return false;
	}
	else if(!bodybuild())
	{
		document.product.BodyBuild.focus();
		return false;
	}
	else if(!sim())
	{
		document.product.Sim.focus();
		return false;
	}
	else if(!technoogy())
	{
		document.product.Technoogy.focus();
		return false;
	}
	else if(!displaytype())
	{
		document.product.Displaytype.focus();
		return false;
	}
	else if(!displaysize())
	{
		document.product.Displaysize.focus();
		return false;
	}
	else if(!displayproctector())
	{
		document.product.Displayproctector.focus();
		return false;
	}
	else if(!os())
	{
		document.product.OS.focus();
		return false;
	}
	else if(!chipset())
	{
		document.product.Chipset.focus();
		return false;
	}
	else if(!cpu())
	{
		document.product.CPU.focus();
		return false;
	}
	else if(!gpu())
	{
		document.product.GPU.focus();
		return false;
	}
	else if(!cardslort())
	{
		document.product.Cardslort.focus();
		return false;
	}
	else if(!internalmemory())
	{
		document.product.InternalMemory.focus();
		return false;
	}
	else if(!primerycamera())
	{
		document.product.Primerycamera.focus();
		return false;
	}
	else if(!camerafeature())
	{
		document.product.CameraFeature.focus();
		return false;
	}
	else if(!video())
	{
		document.product.Video.focus();
		return false;
	}
	else if(!secondarycamera())
	{
		document.product.SecondaryCamera.focus();
		return false;
	}
	else if(!alerttype())
	{
		document.product.AlertType.focus();
		return false;
	}
	else if(!loudspeaker())
	{
		document.product.Loudspeaker.focus();
		return false;
	}
	else if(!quantity())
	{
		document.product.Quantity.focus();
		return false;
	}
	else if(!price())
	{
		document.product.Price.focus();
		return false;
	}
	else
		return true;
}
function callmodal()
{
		document.getElementById("BrandName").style = "visibility: hidden";
		document.addproduct.BrandName.style="background-color: white";
		document.addproduct.BrandName.value=null;
		document.getElementById('myModal').style="display: block";
}
function btnexit()
{
	document.getElementById('myModal').style="display: none";
}
window.addEventListener('click',outsiteclick);

function outsiteclick(e)
{
	if(e.target==document.getElementById('myModal'))
	{
		document.getElementById('myModal').style="display: none";
	}
}
function brandname()
{
	var i =document.addproduct.BrandName.value.length;
	if(i>=2)
	{
		document.getElementById("BrandName").style = "visibility: hidden";
		document.addproduct.BrandName.style="background-color: white";
		return true;
	}
	else
	{
		document.getElementById("BrandName").style = "visibility: visible";
		document.addproduct.BrandName.style="background-color: #ff6666";
		return false;
	}
}
function AddBrand()
{
	if(!brandname())
	{
		document.addproduct.BrandName.focus();
		return false;
	}
	else
	{
		return true;
	}
}
function eroad()
{
	alert("Brand can not add");
}