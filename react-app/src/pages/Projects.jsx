import React from "react";
import Project from "../components/Project";

const Projects = () => {
    const projects = [
        {
            id: 1,
            title: "Project 1",
        },
        {
            id: 2,
            title: "Project 2",
        }
    ];

    return (
        <div className="projects-container">
            {projects.map((p) => (
                <Project project={p} key={p.id}/>
            ))}
        </div>
    );
};

export default Projects;
