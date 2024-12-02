import React, {useState} from "react";
import Project from "../components/Project";

const Projects = () => {
  const [projects] = useState([]); 

  return (
    <div className="projects-container">
      <h1>hi</h1>
      {projects.map((p) => (
        <Project project={p} key={p.id} />
      ))}
    </div>
  );
};

export default Projects;
