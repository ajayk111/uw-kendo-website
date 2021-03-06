import React, {FunctionComponent} from "react";
import "./style.css";

const Carousel: FunctionComponent = () => {
    return <div className="carousel">
        <img alt="Kendo Club at the University of Washington" src={`${process.env.PUBLIC_URL}/Images/Carousel/img02.jpg`} />
    </div>;
};

export default Carousel;
