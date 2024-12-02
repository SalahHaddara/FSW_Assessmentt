import {ProjectsProvider} from './context/ProjectsContext';

const App = () => {
    return (
        <ProjectsProvider>
            <Projects/>
        </ProjectsProvider>
    );
};