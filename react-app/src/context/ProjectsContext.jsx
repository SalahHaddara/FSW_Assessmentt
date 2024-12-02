import React, {createContext, useState, useContext, useEffect} from 'react';
import apiRoutes from '../utils/api';

const ProjectsContext = createContext();

export const ProjectsProvider = ({children}) => {
    const [projects, setProjects] = useState([]);

    useEffect(() => {
        fetch(apiRoutes.getProjects)
            .then(response => response.json())
            .then(data => setProjects(data));
    }, []);

    return (
        <ProjectsContext.Provider value={{projects}}>
            {children}
        </ProjectsContext.Provider>
    );
};

export const useProjects = () => useContext(ProjectsContext);