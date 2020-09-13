import {FunctionComponent} from "react";
import React from "react";
import OfficerCard from "../../common/OfficerCard/OfficerCard";

const Instructors: FunctionComponent = () => {
    return <>
        <h1 style={{margin: "0"}}>Club Advisor</h1>
        <OfficerCard position="CJ Chaney" name="Kendo 4th Dan" quote="PNKF President" image="Sensei/cj_chaney.jpg"/>
        <h1 style={{margin: "0"}}>Guest Instructors</h1>
        <OfficerCard position="Thomas Bolling" name="Kendo 4th Dan, Iaido 5th Dan" quote="Assistant Instructor: Bellevue Kendo Club, PNKF Recording Secretary" image="Sensei/bolling.JPG"/>
        <OfficerCard position="Darrick Lew" name="Kendo 4th dan, Iaido 3rd Dan" image="Sensei/Darrick.jpg"/>

    </>;
};
export default Instructors;