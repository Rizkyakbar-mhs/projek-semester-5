import React, { Component } from "react";
import LoginPage from "./home/LoginPage";
import Dashboard from './dashboard/Dashboard';
import { BrowserRouter,Link, Switch, Route } from "react-router-dom";

class App extends Component {
  render() {
    return(
    <BrowserRouter>
        <Switch>
          <Route exact path="/" component={LoginPage}/>
          <Route path="/Home"  component={Dashboard}/>
        </Switch>
    </BrowserRouter>
    )
  }
}



export default App;