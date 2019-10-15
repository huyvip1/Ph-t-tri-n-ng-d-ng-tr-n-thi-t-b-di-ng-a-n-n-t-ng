import {createAppContainer} from 'react-navigation';
import {createStackNavigator} from 'react-navigation-stack';


import HomeScreen from './src/screen/Home';
import MainScreen from './src/screen/Main';
import AddScreen from './src/screen/Add';
const AppNavigation = createStackNavigator({
  Home: HomeScreen,
  Main: MainScreen,
  Add: AddScreen,
});

export default createAppContainer(AppNavigation);

