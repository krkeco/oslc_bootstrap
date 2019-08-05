'use strict';

const e = React.createElement;


    const month = new Array();
    month[0] = "Jan";
    month[1] = "Feb";
    month[2] = "Mar";
    month[3] = "Apr";
    month[4] = "May";
    month[5] = "Jun";
    month[6] = "Jul";
    month[7] = "Aug";
    month[8] = "Sep";
    month[9] = "Oct";
    month[10] = "Nov";
    month[11] = "Dec";
    
    const styles = {marginBottom: '5px',padding:'5px',margin:'5px', borderTop: "thin solid #525f72"};

class RecentsList extends React.Component {
  constructor(props) {
    super(props);
    this.state = { 
      liked: false,
      recents:[],

      recentUrl: "https://oslcarcadia.com/sermons/20190728_sermon.mp3",
      recentTitle: "",
      
      play: false,
      buttonText: 'Play',
      hasRecording: false,


    };

    this.getAPI = this.getAPI.bind(this);
    this.play = this.play.bind(this);
    this.SortSeriesByDate = this.SortSeriesByDate.bind(this);
    
  }
  SortSeriesByDate(a, b){
    return new Date(b.date).getTime() - new Date(a.date).getTime();
  }


  componentDidMount(){
    this.getAPI();
  }
  
  async getAPI() {

      let apiUrl = 'https://hidden-brook-22839.herokuapp.com/recents.json';
      const response = await fetch(apiUrl);
      const json = await response.json();
      json.sort(this.SortSeriesByDate).reverse();
      console.log('krkeco: ' +JSON.stringify(json));

      this.setState({recents: json})
      
      this.audio = new Audio(this.state.recentUrl);
  }

  play() {
    if(this.state.play){
        this.setState({ play: false, buttonText: 'Play'})
        this.audio.pause();
      }else{
        this.setState({ play: true, buttonText: 'Pause'});
        this.audio.play();
      }
  }

  render() {
    // let music = e('button', {onClick:this.play,style:styles}, `${this.state.buttonText} ${this.state.recentTitle}`)
    let list = [];


    // this.state.recents.sort();
    
    this.state.recents.map((recent,index)=> {
      let hasRecording = false;
      let prettyDate = new Date(recent.date);
      // console.log(prettyDate)
      let theMonth = month[prettyDate.getMonth()];
      // console.log(theMonth)
      let theDay = prettyDate.getUTCDate();
      if (theDay < 10){
        theDay = "0"+theDay;
      }
      // console.log('day: '+theDay)
      let theDate = theMonth + "/" + theDay;
      let text = theDate +"--" + recent.component + ": " + recent.title;

      if(recent.component == "Recording" && !this.state.hasRecording && !hasRecording){
        hasRecording = true;
        let newUrl = "https://oslcarcadia.com/sermons/"+recent.date.substring(0,4)+recent.date.substring(5,7)+recent.date.substring(8,10)+"_sermon.mp3"
        this.setState({hasRecording: true, recentTitle: recent.title, recentUrl: newUrl});
        // list[5] = e('audio',src="https://www.oslcarcadia.com/sermons/20160410_sermon.mp3",null)
        console.log('there is a recording'+newUrl)
        // this.audio = new Audio(this.state.recentUrl);
        // list[0] = e('audio', {style: {color: "red", backgroundColor: "blue"}}, `recording`)        
      }
      let itemView = e('div', {style:styles}, [`${text}`]);
      let hrefView = e('a', {style:{color: "#525f72"},target:"_blank",href:"https://sermons.oslcarcadia.com"},itemView);
      list[index+1] = hrefView;
      console.log('krkeco'+text)
      // return list;
    })

    // let audios = Audios();
    let views = list;
    //[music, list,]
     // Audios()]
    
    return e(
      'div', null, views
    );
  }
}

function Breaker() {
  return e('hr',{style:{color: "black",align: "center",width:'500px',height: 1}},null);
}

function Audios() {
  return e(
    'div', null, `new Audios component`
  );
}


const domContainer = document.querySelector('#recent_list_container');
ReactDOM.render(e(RecentsList), domContainer);