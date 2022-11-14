function List({ items }) {
    return (
    <>
        <ul className="todo__list">
        {
            items.map(item => {
                return <li className="active">
                    <i className={!item.icon ? "badge badge--" + item.color  : ""}> { item.icon ??  "" } </i>
                    <span> { item.name } </span>             
                </li>
            })
        }
        </ul>
    </>)
}

export default List;