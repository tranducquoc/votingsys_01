import React from 'react'
import { render } from 'react-dom'
import {
  Router,
  Route,
  Switch
} from 'react-router-dom'
import axios from 'axios';
import { createBrowserHistory } from 'history';
import CreatePoll from './components/CreatePoll'
import LinkPoll from './components/LinkPoll'

const history = createBrowserHistory();

render (
    <Router history={history}>
        <Switch>
            <Route exact path='/' component={CreatePoll} />
            <Route path='/link-poll' component={LinkPoll} />
        </Switch>
    </Router>, document.getElementById('information-poll')
)
