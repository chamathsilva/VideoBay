
<script type="text/javascript" charset="utf-8">
/* if the document is ready... */
$(document).ready(function(){



/* if HTML5 video is supported */

 //document.getElementById("p1").innerHTML = "test1";
  var timestamps = [],
    last = 0,
    all = 0,
    now = 0,
    old = 0,
    i=0;

/* hide all articles via CSS */
$('html').addClass('js');

/* 
   Loop over the articles, read the timestamp start and end and store 
   them in an array
*/
$('article').each(function(o){
  if($(this).attr('data-start')){
    timestamps.push({
      start : +$(this).attr('data-start'),
      end : +$(this).attr('data-end')
    });
  }
});

all = timestamps.length;
    
/* 
  when the video is playing, round up the time to seconds and call the 
  showsection function continuously
*/
$('video').bind('timeupdate',function(event){
  now = parseInt(this.currentTime);
  /* throttle function calls to full seconds */
  showsection(now);

  old = now;
});

/*
  Test if the current time is within the range of any of the 
  defined timestamps and show the appropriate section.
  Hide all others.
*/
function showsection(t){
  for(i=0;i<all;i++){
    if(t >= timestamps[i].start && t <= timestamps[i].end){
      document.getElementById("xx").src = "<?php echo $src_path; ?>"+(i+1)+"."+"jpg";
    } else {
          /*set blank slid*/
        }
      }
    }
}
)


$(document).ready(function(){

$('#menu ul li a').click(function(){
  document.getElementById("xx").src = "<?php echo $src_path; ?>"+$(this).attr('href')+"."+"jpg";
  return false;

});

});
            
/*when slid is clickin call this function with the start time of that slid.
  this function jump the vide to that time.*/
var vid = document.getElementById("myVideo");
vid.autoplay = true;


function setCurTime(n) {
    vid.currentTime=n;
}


</script>