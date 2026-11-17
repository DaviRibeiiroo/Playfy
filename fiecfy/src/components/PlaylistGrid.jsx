import PlaylistCard from "./PlaylistCard";

function PlaylistGrid(){
    return(
        <div className="flex gap-40">
            <PlaylistCard imgURL={""}/>
            <PlaylistCard/>
            <PlaylistCard/>
            <PlaylistCard/>
        </div>
    );
}

export default PlaylistGrid;